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
        dd($data);
    }
}
