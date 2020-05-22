<?php

namespace App\Http\Controllers;

use DateTime;
use GuzzleHttp\Client;
use GuzzleHttp\Middleware;
use App\Exports\exportData;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Pagination\LengthAwarePaginator;
use App\dataCollectionMongoDB as dataMongoDB;

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
    protected $nitCliente;
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
        return view('instahunters');
    }

    public function getFrmInstaHunterview()
    {
            $response =  $this->client->request('GET', '');
            $allData = json_decode($response->getBody()->getContents());

            /**
             * Paginación
             */
            $allData = $this->paginate($allData);
            return $allData;

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
            'optionScrap'=> 'required|in:usuario,hashtag',
            'palabraClave' => 'required'
        ],$validateMessage);
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
            $this->TruncadeAndInsertHashtag($data2view);
        }
        elseif($this->request->optionScrap === "usuario"){
            $res = $this->client->request('POST', 'ScrapUser', [
                'headers' => [
                'Accept'     => 'application/json',
                ],
                'json' => [
                    'usuario' => $this->request->palabraClave,
                    ]
                ]

            );
            $data2view = json_decode($res->getBody()->getContents());
            $this->TruncadeAndInsertUser($data2view);
        }

    }


    public function paginate($items)
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

        return view('instahunterview', ['items' => $paginatedItems, 'countItem' => count($items)]);
    }

    public function exportXls()
    {
        $response = $this->client->request('GET', 'apiPreview.php');
        $posts = json_decode($response->getBody()->getContents(), true);
        return Excel::download(new exportData($posts), 'Data.xlsx');

    }

    private  function TruncadeAndInsertHashtag($data)
    {

        $routeAtributte = $data->entry_data->TagPage;
        $dataIn = $routeAtributte[0]->graphql->hashtag->edge_hashtag_to_media->edges;
        $dataTOInsert = [];
        /***For que trunca y analiza el Json respuesta por el Api de Python,
         * Y entrega la data importante a guardar en BD de Mongo
        */
        for ($i=0; $i < count($dataIn); $i++) {
            error_reporting(~E_NOTICE);
            $text = $dataIn[$i]->node->edge_media_to_caption->edges[0]->node->text;
            $img = $dataIn[$i]->node->display_url;
            $likes = $dataIn[$i]->node->edge_liked_by->count;
            $comentarios = $dataIn[$i]->node->edge_media_to_comment->count;
            $hashtag_time = $dataIn[$i]->node->taken_at_timestamp;
            $id_usuario = $dataIn[$i]->node->shortcode;
            $fecha = new DateTime("@$hashtag_time");
            $dataTOInsert[$i]['img'] = $img;
            $dataTOInsert[$i]['txt'] = $text;
            $dataTOInsert[$i]['time'] = $fecha->format('Y-m-d H:i:s');
            $dataTOInsert[$i]['likes'] = $likes;
            $dataTOInsert[$i]['comentarios'] = $comentarios;
            $dataTOInsert[$i]['id_usuario'] = $id_usuario;
            $dataTOInsert['consulta_log'] = $this->date;
            $dataTOInsert['wordSearch'] = $routeAtributte[0]->graphql->hashtag->name;
        }

        $dataIn = $routeAtributte[0]->graphql->hashtag->edge_hashtag_to_top_posts->edges;
        $dataTOPInsert = [];
        for ($i=0; $i <count($dataIn) ; $i++) {
            error_reporting(~E_NOTICE);
            $text = $dataIn[$i]->node->edge_media_to_caption->edges[0]->node->text;
            $img = $dataIn[$i]->node->display_url;
            $likes = $dataIn[$i]->node->edge_liked_by->count;
            $comentarios = $dataIn[$i]->node->edge_media_to_comment->count;
            $hashtag_time = $dataIn[$i]->node->taken_at_timestamp;
            $id_usuario = $dataIn[$i]->node->shortcode;
            $fecha = new DateTime("@$hashtag_time");
            $dataTOPInsert[$i]['img'] = $img;
            $dataTOPInsert[$i]['txt'] = $text;
            $dataTOPInsert[$i]['time'] = $fecha->format('Y-m-d H:i:s');
            $dataTOPInsert[$i]['likes'] = $likes;
            $dataTOPInsert[$i]['comentarios'] = $comentarios;
            $dataTOPInsert[$i]['id_usuario'] = $id_usuario;
            $dataTOPInsert['consulta_log'] = $this->date;
            $dataTOPInsert['wordSearch'] = $routeAtributte[0]->graphql->hashtag->name;
        }

        $dataMongoDB = new \App\dataCollectionMongoDB;
        $dataMongoDB->insert($dataTOInsert);

        $dataTopHastag = new \App\dataTOPCollectionMongoDB;
        $dataTopHastag->insert($dataTOPInsert);

        return back();
    }
    private  function TruncadeAndInsertUser($data)
    {
        $routeAtributte = $data->entry_data->ProfilePage[0]->graphql->user->edge_owner_to_timeline_media->edges;
        $dataTOInsert = [];
        for ($i=0; $i < count($routeAtributte); $i++) {
            error_reporting(~E_NOTICE);
            $text = $routeAtributte[$i]->node->edge_media_to_caption->edges[0]->node->text;
            $img = $routeAtributte[$i]->node->display_url;
            $likes = $routeAtributte[$i]->node->edge_liked_by->count;
            $comentarios = $routeAtributte[$i]->node->edge_media_to_comment->count;
            $usuario_time = $routeAtributte[$i]->node->taken_at_timestamp;
            $id_usuario = $routeAtributte[$i]->node->shortcode;
            $fecha = new DateTime("@$usuario_time");
            $dataTOInsert[$i]['img'] = $img;
            $dataTOInsert[$i]['txt'] = $text;
            $dataTOInsert[$i]['time'] = $fecha->format('Y-m-d H:i:s');
            $dataTOInsert[$i]['likes'] = $likes;
            $dataTOInsert[$i]['comentarios'] = $comentarios;
            $dataTOInsert['consulta_log'] = $this->date;
            $dataTOInsert['userSearch'] = $routeAtributte[0]->graphql->hashtag->name;
        }
        $dataMongoDB = new \App\dataCollectionMongoDB;
        $dataMongoDB->insert($dataTOInsert);

        return back();
    }

}
