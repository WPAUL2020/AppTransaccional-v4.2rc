<?php

namespace App\Http\Controllers;

use DateTime;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\ClientException;
use App\dataCollectionMongoDB as dataCollection;
use App\scrapedUserCollectionMongoDB as scrapedUser;
use App\dataTOPCollectionMongoDB as TopPostCollection;
use App\scrapedUserTopCollectionMongoDB as userTOP;

class AnaliticMongoDBController extends Controller
{
    protected $date;
    protected $client;
    protected $request;

    public function __construct(Request $request) {
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
        $data = dataCollection::all();
        return view('instahuntersvista', compact('data'));
    }

    public function scrapAndAnalitic()
    {
        $findByUser = dataCollection::findOrFail($this->request->_id);

        $dataTopHastag = new \App\dataTOPCollectionMongoDB;
        $idCollecionTop = $dataTopHastag->insertGetId($this->findTOPPost($findByUser));
        $scrapTopUser = TopPostCollection::findOrFail($idCollecionTop);

        $ScrapTopUserPost = new \App\scrapedUserTopCollectionMongoDB;
        $idScrapUserTop = $ScrapTopUserPost->insertGetId($this->findByIDUser($scrapTopUser));
        $scrapTopUsername = userTOP::findOrFail($idScrapUserTop);

        $scrapUser = new \App\scrapedUserCollectionMongoDB;
        $idScrapUser = $scrapUser->insertGetId($this->findByIDUser($findByUser));
        $scrapUser = scrapedUser::findOrFail($idScrapUser);
        $data = $idScrapUser . "------" . $idScrapUserTop . "------" .$idCollecionTop;
        dd($data);
    }


    private function findByIDUser($id_user)
    {
        $dataInsert = [
            'wordSearch' => $id_user['wordSearch'],
            'consulta_log' => $this->date
        ];
        for ($i=0; $i < count(collect($id_user)) ; $i++) {
            error_reporting(~E_NOTICE || ~E_WARNING);
            try {
                $response =  $this->client->request('GET', "p/".$id_user[$i]['id_usuario']."/?__a=1");
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
        if ($routeAtributte->is_video == true) {
            $arrayUsername = [
                'userName' => $routeAtributte->owner->username,
                'fullName' => $routeAtributte->owner->full_name,
                'profile_pic' => $routeAtributte->owner->profile_pic_url,
                'pais' => $routeAtributte->location->name,
                'likes' => $routeAtributte->edge_media_preview_like->count,
                'comentarios' => $routeAtributte->edge_media_preview_comment->count,
                'video' => $routeAtributte->video_url,
                'text' => $routeAtributte->edge_media_to_caption->edges[0]->node->text
        ];
        } else {
                $arrayUsername = [
                    'userName' => $routeAtributte->owner->username,
                    'fullName' => $routeAtributte->owner->full_name,
                    'profile_pic' => $routeAtributte->owner->profile_pic_url,
                    'pais' => $routeAtributte->location->name,
                    'likes' => $routeAtributte->edge_media_preview_like->count,
                    'comentarios' => $routeAtributte->edge_media_preview_comment->count,
                    'img' => $routeAtributte->display_url,
                    'text' => $routeAtributte->edge_media_to_caption->edges[0]->node->text
            ];
        }


        return $arrayUsername;
    }

    private function findTOPPost($data)
    {
            try {
                $response =  $this->client->request('GET', "explore/tags/".$data['wordSearch']."/?__a=1");
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
        for ($i=0; $i <count($routeAtributte) ; $i++) {
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

}
