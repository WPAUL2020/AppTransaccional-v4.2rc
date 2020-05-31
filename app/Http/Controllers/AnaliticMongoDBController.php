<?php

namespace App\Http\Controllers;

use DateTime;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Exception\ClientException;
use App\dataCollectionMongoDB as dataCollection;
use App\scrapedUserTopCollectionMongoDB as userTOP;
use App\scrapedUserCollectionMongoDB as scrapedUser;
use App\dataTOPCollectionMongoDB as TopPostCollection;
use App\EmpresaTercero as EmpresaTercero;

class AnaliticMongoDBController extends Controller
{
    /**
     * $date
     * Variable que contiene la fecha actual
     * @var date
     */
    protected $date;
    /**
     * $client
     * Variable que contendrá la instancia de tipo cliente de
     * la librería GuzzleHttp que se encarga de realizar las peticiones
     * a las cabeceras del API
     * @var Client
     */
    protected $client;
    /**
     * $request
     * Variable que contendrá todo los parámetros de la petición http
     * @var Request
     */
    protected $request;

    /**
     * __construct
     * Constructor de la clase, recibe como parámetro la petición
     * Request de la ruta
     * @param Request $request
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->middleware('auth');
        $this->client = new Client([
            'base_uri' => 'www.instagram.com/'
        ]);
        date_default_timezone_set('America/Bogota');
        $this->date = date('d/m/Y H:i:s');
    }
    public function index()
    {
        if ($this->request->user()->authorizeRoles1('ADMINISTRADOR')){
            $data = dataCollection::all();
            return view('instahunterAdminVista', compact('data'));
        }
        else{
            $user = Auth::user();
            if ($this->request->user()->authorizeRoles1(['EMPLEADO EXTERNO'])) {
                $this->nombreEmpresa = EmpresaTercero::where('ID_EMPRESA_TERCERO',$user->ID_EMPRESA_TERCERO)->first();
                $this->nombreEmpresa = $this->nombreEmpresa->NOMBRE;
            } else {
                $this->nombreEmpresa = $user->name;
            }
            $data = DB::connection('mongodb')->collection('data')->where(
                'empresa',
                '=',
                $this->nombreEmpresa
            )->get();
            return view('instahuntersvista', compact('data'));

        }

    }

    public function scrapAndAnalitic()
    {
        #Busca en Mongo la Collección por ID asignado al momento de realizar el raspado
        $findByUser = dataCollection::findOrFail($this->request->_id);
        #Instancia el modelo dataTopHashtag
        $dataTopHastag = new \App\dataTOPCollectionMongoDB;
        /***
         * Al modelo dataTopHashtag le inserta el array que retorna el método "findTOPPost" que recibe como parámetro
         * La colección de encontrada por id en mongo y retorna un id de inserción
         */

        $idCollecionTop = $dataTopHastag->insertGetId($this->findTOPPost($findByUser));
        /** Se busca por el id la colección anteriormente generada en el modelo dataTopHashtag*/
        $scrapTopUser = TopPostCollection::findOrFail($idCollecionTop);
        #Instancia el modelo scrapedUserTop
        $ScrapTopUserPost = new \App\scrapedUserTopCollectionMongoDB;
        /***
         * Al modelo scrapedUserTop le inserta el array que retorna el método "findByIDUser" que recibe como parámetro
         * La colección de encontrada por id en mongo y retorna un id de inserción
         */
        $idScrapUserTop = $ScrapTopUserPost->insertGetId($this->findByIDUser($scrapTopUser));
        /** Se busca por el id la colección anteriormente generada en el modelo scrapedUserTop*/
        $scrapTopUsername = userTOP::findOrFail($idScrapUserTop);
        #Instancia el modelo dataTopHashtag scrapedUser
        $scrapUser = new \App\scrapedUserCollectionMongoDB;
        /***
         * Al modelo scrapedUser le inserta el array que retorna el método "findByIDUser" que recibe como parámetro
         * La colección de encontrada por id en mongo y retorna un id de inserción
         */
        $idScrapUser = $scrapUser->insertGetId($this->findByIDUser($findByUser));
        /** Se busca por el id la colección anteriormente generada en el modelo scrapedUser*/
        $scrapUser = scrapedUser::findOrFail($idScrapUser);
        /** Se llama el método "chartLikesComment" que generá el array con los valores para el pie char con la data encontrada en la colección de mongo
         * encontrada por ID
         */
        $likesAndComments = $this->chartLikesComment($findByUser);
        /** Se llama el método "chartUserTOP" que generá el array con los valores para el pie char con la data encontrada en la colección de mongo
         * encontrada por ID
         */
        $usersTOP = $this->chartUserTOP($scrapTopUsername);
        /** Se pasan los datos del raspado de los usuarios y se cuenta cuantas veces aparece con el metodo "chartUserValues()"
         * el cual recibe como parámetro el resultado de buscar por id los últimos encontrados.
        */
        $chartUserValues = $this->chartUserValues($scrapUser);
        /**Retorno de la vista  con los datos */
        return view('chartMongoDB', compact('likesAndComments', 'usersTOP', 'chartUserValues'));
    }


    /**
     * findByIDUser
     * El método recibe  como parámetro el contenido de la collection en mongoDB
     * que contiene los ids de los usuario.
     * Realiza un petición POST  al API de Instagram www.instagram.com/p/ID_DE_USUARIO/?__a=1
     * la cual retorna una respuesta de tipo JSON que a su ves se le entrega esa respuesta al método
     * "truncateUsername()" que se encarga de manipular la data y entregar solo data interesante
     * para que a su ves este array pueda ser insertado truncado pueda ser insertado en el método
     * scrapAndAnalitic()
     * @param mixed $id_user
     * @return void
     */
    private function findByIDUser($id_user)
    {
        $id_user = collect($id_user);
        $dataInsert = [
            'wordSearch' => $id_user['wordSearch'],
            'consulta_log' => $this->date
        ];
        for ($i = 0; $i < count($id_user); $i++) {
            error_reporting(~E_NOTICE || ~E_WARNING);
            try {
                $response =  $this->client->request('GET', "p/" . $id_user[$i]['id_usuario'] . "/?__a=1");
                $allData = json_decode($response->getBody()->getContents());
                array_push($dataInsert, $this->truncateUsername($allData));
            } catch (ClientException $e) {
                $e->getResponse()->getStatusCode();
            }
        }


        return $dataInsert;
    }

    private function truncateUsername($data)
    {
        $routeAtributte = $data->graphql->shortcode_media;
        $baseURL = "https://www.instagram.com/p/";
        if ($routeAtributte->is_video == true) {
            $arrayUsername = [
                'id_usuario' => $routeAtributte->shortcode,
                'userName' => $routeAtributte->owner->username,
                'fullName' => $routeAtributte->owner->full_name,
                'profile_pic' => $routeAtributte->owner->profile_pic_url,
                'pais' => $routeAtributte->location->name,
                'likes' => $routeAtributte->edge_media_preview_like->count,
                'comentarios' => $routeAtributte->edge_media_preview_comment->count,
                'video' => $routeAtributte->video_url,
                'text' => $routeAtributte->edge_media_to_caption->edges[0]->node->text,
                'img' => $routeAtributte->display_url,
                'OriginalPost' => $baseURL . $routeAtributte->shortcode
            ];
        } else {
            $arrayUsername = [
                'id_usuario' => $routeAtributte->shortcode,
                'userName' => $routeAtributte->owner->username,
                'fullName' => $routeAtributte->owner->full_name,
                'profile_pic' => $routeAtributte->owner->profile_pic_url,
                'pais' => $routeAtributte->location->name,
                'likes' => $routeAtributte->edge_media_preview_like->count,
                'comentarios' => $routeAtributte->edge_media_preview_comment->count,
                'img' => $routeAtributte->display_url,
                'text' => $routeAtributte->edge_media_to_caption->edges[0]->node->text,
                'OriginalPost' => $baseURL . $routeAtributte->shortcode
            ];
        }


        return $arrayUsername;
    }

    private function findTOPPost($data)
    {
        try {
            $response =  $this->client->request('GET', "explore/tags/" . $data['wordSearch'] . "/?__a=1");
            $allData = json_decode($response->getBody()->getContents());
            $dataInsert = $this->truncateTopPost($allData);
        } catch (ClientException $e) {
            $e->getResponse()->getStatusCode();
        }


        return $dataInsert;
    }


    private function truncateTopPost($data)
    {
        $routeAtributte = $data->graphql->hashtag->edge_hashtag_to_top_posts->edges;
        $dataTOPInsert = [];
        for ($i = 0; $i < count($routeAtributte); $i++) {
            error_reporting(~E_NOTICE);
            $text = $routeAtributte[$i]->node->edge_media_to_caption->edges[0]->node->text;
            $img = $routeAtributte[$i]->node->display_url;
            $likes = $routeAtributte[$i]->node->edge_liked_by->count;
            $comentarios = $routeAtributte[$i]->node->edge_media_to_comment->count;
            $hashtag_time = $routeAtributte[$i]->node->taken_at_timestamp;
            $id_usuario = $routeAtributte[$i]->node->shortcode;
            $fecha = new DateTime("@$hashtag_time");
            $dataTOPInsert[$i]['img'] = $img;
            $dataTOPInsert[$i]['txt'] = $text;
            $dataTOPInsert[$i]['time'] = $fecha->format('Y-m-d H:i:s');
            $dataTOPInsert[$i]['likes'] = $likes;
            $dataTOPInsert[$i]['comentarios'] = $comentarios;
            $dataTOPInsert[$i]['id_usuario'] = $id_usuario;
            $dataTOPInsert['consulta_log'] = $this->date;
            $dataTOPInsert['wordSearch'] = $data->graphql->hashtag->name;
        }
        return $dataTOPInsert;
    }

    private function chartLikesComment($data)
    {
        $data = collect($data);
        for ($i = 0; $i < count($data); $i++) {
            error_reporting(~E_NOTICE);
            $likes += $data[$i]['likes'];
            $comentarios += $data[$i]['comentarios'];
        }
        $total = [
            'likes' => $likes,
            'comentarios' => $comentarios
        ];
        return $total;
    }

    private function chartUserTOP($scrapTopUsername)
    {
        $scrapTopUser = collect($scrapTopUsername);
        $chart = [];
        for ($i = 0; $i < count($scrapTopUser); $i++) {
            error_reporting(~E_NOTICE);
            $userName = $scrapTopUsername[$i]['userName'];
            $likes = $scrapTopUsername[$i]['likes'];
            $OriginalPost = $scrapTopUsername[$i]['OriginalPost'];
            $img = $scrapTopUsername[$i]['img'];
            if (isset($userName) and isset($likes) and isset($OriginalPost)) {
                if (!empty($userName) and !empty($likes) and !empty($OriginalPost)) {
                    $chart[$i]['userName'] = $userName;
                    $chart[$i]['likes'] = $likes;
                    $chart[$i]['OriginalPost'] = $OriginalPost;
                    $chart[$i]['img'] = $img;
                }
            }
        }
        return $chart;
    }


    private function chartUserValues($Data)
    {
        $Data = collect($Data);
        error_reporting(~E_NOTICE || ~E_WARNING);
        $onlyUserName = [];
        for ($i = 0; $i < count($Data); $i++) {
            $userName = $Data[$i]['userName'];
            if (isset($userName)) {
                if (!empty($userName)) {
                    $onlyUserName[$i]['userName'] = $userName;
                }
            }
        }
        $truncate = [];
        foreach ($onlyUserName as $key => $value) {
            if (isset($value['userName'])) {
                array_push($truncate, $value['userName']);
            }
        }

        return array_count_values($truncate);
    }

}
