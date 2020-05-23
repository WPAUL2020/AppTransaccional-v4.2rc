<?php

namespace App\Http\Controllers;

use DateTime;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use App\dataCollectionMongoDB as dataCollection;
use App\scrapedUserCollectionMongoDB as scrapedUser;

class AnaliticMongoDBController extends Controller
{
    protected $date;

    public function __construct() {
        $this->client = new Client([
            'base_uri' => 'www.instagram.com/'
        ]);
        $this->middleware('auth');
        date_default_timezone_set('America/Bogota');
        $this->date = date('d/m/Y H:i:s');
    }
    public function index()
    {
        $data = dataCollection::All();
        $this->findByIDUser($data);
        return view('chart');


    }

    private function findByIDUser($id_user)
    {
        $dataInsert = [
            'wordSearch' => $id_user[0]['wordSearch'],
            'consulta_log' => $this->date
        ];

        $itemCollection = collect($id_user[0]);
        for ($i=1; $i <= count($itemCollection) ; $i++) {
            error_reporting(~E_NOTICE);
            try {
                $response =  $this->client->request('GET', "p/".$id_user[0][$i]['id_usuario']."/?__a=1");
                $allData = json_decode($response->getBody()->getContents());
                array_push($dataInsert, $this->truncateUsername($allData));
            } catch (ClientException $e) {
                $e->getResponse()->getStatusCode();
            }
        }
        array_push($dataInsert, $parametros);
        $dataMongoDB = new \App\scrapedUserCollectionMongoDB;
        $dataMongoDB->insert($dataInsert);
    }

    private function truncateUsername($data)
    {
        $routeAtributte = $data->graphql->shortcode_media->owner;
        $arrayUsername = [
            'userName' => $routeAtributte->username,
            'fullName' => $routeAtributte->full_name,
            'profile_pic' => $routeAtributte->profile_pic_url,
    ];
        return $arrayUsername;
    }



}
