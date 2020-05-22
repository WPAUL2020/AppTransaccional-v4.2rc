<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\testMongo as testMongo;
use App\Http\Controllers\Controller;

class testMongoController extends Controller
{
    public function index()
    {
        $users = testMongo::all();
        dd($users);
    }
}
