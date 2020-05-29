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

    public function indexPreview()
    {
        $findByID = dataCollection::findOrFail($this->request->_id);
        $data = $this->truncateModelData($findByID);
        return $this->paginate($data, $this->request->_id);
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
                return redirect()->back()->with('message', 'Su palabra a sido scrapeada satisfactoriamente!');
            }
        } catch (ConnectException $th) {
            $th->getResponse();
            return redirect()->back()->with('msj', 'OOPS!!!!!!!!! Algo a fallado con el servidor de raspado\r\n Por favor contacte al administrador');
        }
            catch(ServerException $e){
                $error =  "Codigo de error: ". $e->getResponse()->getStatusCode();
                return redirect()->back()->with('msj', 'OOPS!!!!!!!!! La palabra que intenta buscar no existe en la red social');
            }
            catch(RequestException $e){
                echo $e->getResponse();
                return redirect()->back()->with('msj', 'OOPS!!!!!!!!! La palabra que intenta buscar no existe en la red social');
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
        $data = $this->truncateModelData($findByID);
        return Excel::download(new exportData($data), 'Data.xlsx');

    }

    private  function truncateAndInsertHashtag($data)
    {
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

    private function truncateModelData($data)
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
