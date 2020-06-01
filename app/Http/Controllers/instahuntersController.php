<?php

namespace App\Http\Controllers;

use DateTime;
use GuzzleHttp\Client;
use GuzzleHttp\Middleware;
use App\Exports\exportData;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use App\dataCollectionMongoDB as dataMongoDB;
use Illuminate\Pagination\LengthAwarePaginator;
use App\dataCollectionMongoDB as dataCollection;
use App\scrapedUserCollectionMongoDB as scrapedUser;
use App\EmpresaTercero as EmpresaTercero;
use App\TipoIdentificacion as TipoIdent;
use App\EmpleadosTercero as EmpleadosTercero;

class instahuntersController extends Controller
{
    /**
     * $request
     *
     * @var request
     */
    protected $request;
    /**
     * $client
     *
     * @var guzzle
     */
    protected $client;
    /**
     * $data2view
     *
     * @var string
     */
    protected $data2view;

    /**
     * $nitCliente
     *
     * @var int
     */
    protected $nombreEmpresa;
    protected $date;

    public function __construct(Request $request) {
        $this->request = $request;
        $this->client = new Client([
            'base_uri' => 'http://127.0.0.1:5000/'
        ]);
        $this->data2view = null;
        $this->middleware('auth');
        date_default_timezone_set('America/Bogota');
        $this->date = date('d/m/Y H:i:s');
    }

    /**
     * getFrmInstaHunter
     *
     * @return Illuminate\Contracts\Support\Renderable
     */
    public function indexInstaHuters()
    {
        if (Auth::check()){
            return view('instahunters');

        } else {
            return redirect('/login');
        }
    }

    public function indexPreview()
    {
        if (Auth::check()) {
            $findByID = dataCollection::findOrFail($this->request->_id);
            $data = $this->truncateModelDataGET($findByID);
            return $this->paginate($data, $this->request->_id);
        } else {
            return redirect('/login');
        }

    }


    /**
     * postGuzzleRequest
     *
     * @return void
     */
    public function postGuzzleRequest()
    {
        $validateMessage = [
            "required" => "Este campo es obligatorio",
            "in" => "Seleccione un valor"
        ];
        $this->request->validate([
            'optionScrap'=> 'required|in:hashtag',
            'palabraClave' => 'required'
        ],$validateMessage);
        try {
            if($this->request->optionScrap === "hashtag"){
                $res = $this->client->request('POST', 'ScrapTags', [
                    'headers' => [
                    'Accept'     => 'application/json',
                    ],
                    'json' => [
                        'hashtag' => $this->request->palabraClave,
                        ]
                    ]

                );
                $data2view = json_decode($res->getBody()->getContents());
                $this->truncateAndInsertHashtag($data2view);
                return redirect('/instahuntersvista');
            }
        } catch (ConnectException $th) {
            $th->getResponse();
            alert()->error('Algo a fallado con el servidor de raspado
            Por favor contacte al administrador', 'OOPS!')->persistent('Cerrar');
            return redirect()->back();
        }
            catch(ServerException $e){
                $e->getResponse()->getStatusCode();
                alert()->error('La palabra que intenta buscar no existe en la red social', 'OOPS!')->persistent('Cerrar');
                return redirect()->back();
            }
            catch(RequestException $e){
                $e->getResponse();
                alert()->error('La palabra que intenta buscar no existe en la red social', 'OOPS!')->persistent('Cerrar');
                return redirect()->back();
            }

    }


    private function paginate($items, $id)
    {

        // Get current page form url e.x. &page=1
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        // Create a new Laravel collection from the array data
        $itemCollection = collect($items);

        // Define how many items we want to be visible in each page
        $perPage = 3;

        // Slice the collection to get the items to display in current page
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();

        // Create our paginator and pass it to the view
        $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);

        // set url path for generted links
        $paginatedItems->setPath($this->request->url());

        return view('instahunterview', ['data' => $paginatedItems, 'id' => $id]);
    }

    public function exportXls()
    {
        $findByID = dataCollection::findOrFail($this->request->_id);
        #Instancia el modelo dataTopHashtag scrapedUser
        $scrapUser = new \App\scrapedUserCollectionMongoDB;
        /***
         * Al modelo scrapedUser le inserta el array que retorna el método "findByIDUser" que recibe como parámetro
         * La colección de encontrada por id en mongo y retorna un id de inserción
         */
        $idScrapUser = $scrapUser->insertGetId($this->findByIDUser($findByID));
        $scrapUser = scrapedUser::findOrFail($idScrapUser);
        $data = $this->truncateModelData($findByID, $scrapUser);
        return Excel::download(new exportData($data), 'Data.xlsx');

    }

    private  function truncateAndInsertHashtag($data)
    {
        $user = Auth::user();

        if ($this->request->user()->authorizeRoles1(['EMPLEADO EXTERNO'])) {
            $this->nombreEmpresa = EmpresaTercero::where('ID_EMPRESA_TERCERO',$user->ID_EMPRESA_TERCERO)->first();
            $this->nombreEmpresa = $this->nombreEmpresa->NOMBRE;
        } else {
            $this->nombreEmpresa = $user->name;
        }

        $routeAtributte = $data->entry_data->TagPage;
        $dataIn = $routeAtributte[0]->graphql->hashtag->edge_hashtag_to_media->edges;
        $dataTOInsert = [];
        /***For que trunca y analiza el Json respuesta por el Api de Python,
         * Y entrega la data importante a guardar en BD de Mongo
        */
        for ($i=0; $i < count($dataIn); $i++) {
            error_reporting(~E_NOTICE);
            $img = $dataIn[$i]->node->display_url;
            $text = $dataIn[$i]->node->edge_media_to_caption->edges[0]->node->text;
            $likes = $dataIn[$i]->node->edge_liked_by->count;
            $comentarios = $dataIn[$i]->node->edge_media_to_comment->count;
            $hashtag_time = $dataIn[$i]->node->taken_at_timestamp;
            $id_usuario = $dataIn[$i]->node->shortcode;
            $fecha = new DateTime("@$hashtag_time");
            $dataTOInsert['consulta_log'] = $this->date;
            $dataTOInsert['wordSearch'] = $routeAtributte[0]->graphql->hashtag->name;
            $dataTOInsert['empresa'] = $this->nombreEmpresa;
            $dataTOInsert[$i]['img'] = $img;
            $dataTOInsert[$i]['txt'] = $text;
            $dataTOInsert[$i]['time'] = $fecha->format('Y-m-d H:i:s');
            $dataTOInsert[$i]['likes'] = $likes;
            $dataTOInsert[$i]['comentarios'] = $comentarios;
            $dataTOInsert[$i]['id_usuario'] = $id_usuario;
        }

        $dataMongoDB = new \App\dataCollectionMongoDB;
        $dataMongoDB->insert($dataTOInsert);
    }

    private function truncateModelData($data, $scrapUser)
    {

        $truncate = [];
        $data = collect($data);
        $scrapUser = collect($scrapUser);
        for ($i=0; $i <count(collect($data)) ; $i++) {
            error_reporting(~E_NOTICE);
            $img = $data[$i]['img'];
            $txt = $data[$i]['txt'];
            $time = $data[$i]['time'];
            $likes = $data[$i]['likes'];
            $comentarios = $data[$i]['comentarios'];
            $id_usuario = $scrapUser[$i]['id_usuario'];
            $userName = "@".$scrapUser[$i]['userName'];
            $fullName = $scrapUser[$i]['fullName'];
            $originalPost = "www.instagram.com/p/".$data[$i]['id_usuario'];
            $date =$data['consulta_log'];
            $word =$data['wordSearch'];
            if (isset($img) and isset($txt) and isset($time) and isset($likes) and isset($comentarios) and isset($originalPost) and isset($id_usuario)
                and isset($userName) and isset($fullName)) {
                if (!empty($img) and !empty($time) and !empty($originalPost)) {
                    $truncate[$i]['img'] = $img;
                    $truncate[$i]['txt'] = $txt;
                    $truncate[$i]['time'] = $time;
                    $truncate[$i]['likes'] = $likes;
                    $truncate[$i]['comentarios'] = $comentarios;
                    $truncate[$i]['userName'] = $userName;
                    $truncate[$i]['fullName'] = $fullName;
                    $truncate[$i]['originalPost'] = $originalPost;
                    $truncate[$i]['FechaConsulta'] = $date;
                    $truncate[$i]['BusquedaRealizada'] = $word;
                }
            }
        }
        return $truncate;
    }

    private function findByIDUser($id_user)
    {
        $clienteUser = new Client([
            'base_uri' => 'http://www.instagram.com/'
        ]);
        $id_user = collect($id_user);
        $dataInsert = [
            'wordSearch' => $id_user['wordSearch'],
            'consulta_log' => $this->date
        ];
        for ($i = 0; $i < count($id_user); $i++) {
            error_reporting(~E_NOTICE || ~E_WARNING);
            try {
                $response =  $clienteUser->request('GET', "p/" . $id_user[$i]['id_usuario'] . "/?__a=1");
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
        $arrayUsername = [
            'id_usuario' => $routeAtributte->shortcode,
            'userName' => $routeAtributte->owner->username,
            'fullName' => $routeAtributte->owner->full_name,
            'OriginalPost' => $baseURL . $routeAtributte->shortcode
        ];


        return $arrayUsername;
    }
    private function truncateModelDataGET($data)
    {

        $truncate = [];
        $data = collect($data);
        for ($i=0; $i <count(collect($data)) ; $i++) {
            error_reporting(~E_NOTICE);
            $img = $data[$i]['img'];
            $txt = $data[$i]['txt'];
            $time = $data[$i]['time'];
            $likes = $data[$i]['likes'];
            $comentarios = $data[$i]['comentarios'];
            $originalPost = "www.instagram.com/p/".$data[$i]['id_usuario'];
            $date =$data['consulta_log'];
            $word =$data['wordSearch'];
            if (isset($img) and isset($txt) and isset($time) and isset($likes) and isset($comentarios) and isset($originalPost)) {
                if (!empty($img) and !empty($time) and !empty($originalPost)) {
                    $truncate[$i]['img'] = $img;
                    $truncate[$i]['txt'] = $txt;
                    $truncate[$i]['time'] = $time;
                    $truncate[$i]['likes'] = $likes;
                    $truncate[$i]['comentarios'] = $comentarios;
                    $truncate[$i]['originalPost'] = $originalPost;
                    $truncate[$i]['FechaConsulta'] = $date;
                    $truncate[$i]['BusquedaRealizada'] = $word;
                }
            }
        }
        return $truncate;
    }

}
