<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\scrapedUserCollectionMongoDB as scrapedUser;
use App\dataCollectionMongoDB as dataCollection;

class AnaliticMongoDBController extends Controller
{
    public function index()
    {
        $data = dataCollection::All();
        $this->findByIDUser($data);
        return view('chart');


    }

    private function findByIDUser($id_user)
    {
        foreach ($id_user as $value) {
            dd($value->wordSearch);
        }

        $dataInsert = [];

/*         $wordSerach = $id_user['wordSearch'];
        foreach ($id_user as $id) {
            error_reporting(~E_WARNING);
            $id_user= $id['id_usuario'];
            $res = $this->client->request('POST', 'findByUserID', [
                'headers' => [
                'Accept'     => 'application/json',
                ],
                'json' => [
                    'id_usuario' => $id_user,
                    ]
                ]

            );
            $data2view = json_decode($res->getBody()->getContents());
            array_push($dataInsert, $this->truncateUsername($data2view));
        }

        array_push($dataInsert, $wordSerach); */

        $dataMongoDB = new \App\scrapedUserCollectionMongoDB;
        $dataMongoDB->insert($dataInsert);
    }

    private function truncateUsername($data)
    {
        $routeAtributte = $data->entry_data->PostPage[0]->graphql->shortcode_media->owner;
        $arrayUsername = [
            'userName' => $routeAtributte->username,
            'fullName' => $routeAtributte->full_name,
            'profile_pic' => $routeAtributte->profile_pic_url,
    ];
        return $arrayUsername;
    }



}
