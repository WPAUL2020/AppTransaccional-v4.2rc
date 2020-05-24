<?php

namespace App\Http\Controllers;

use DateTime;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\ClientException;
use App\dataCollectionMongoDB as dataCollection;
use App\scrapedUserCollectionMongoDB as scrapedUser;

class AnaliticMongoDBController extends Controller
{
    protected $date;

    public function __construct() {
        $this->middleware('auth');

    }
    public function index()
    {
        $Users = scrapedUser::All();
        $data = dataCollection::All();
        $truncate = [];
        dd($Users);
        error_reporting(~E_NOTICE || ~E_WARNING);
        foreach ($Users as $value) {
            $contar = collect($value);
            for ($i=0; $i <count($contar) ; $i++) {
                array_push($truncate, $value[$i]['fullName']);
            }
        }

        dd(array_count_values($truncate));
    }
}
