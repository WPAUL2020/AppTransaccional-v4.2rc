<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

/* use Illuminate\Http\Request; */

class applController extends Controller
{
  /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('appl');
    }
    public function index2()
    {

        return view('appl2');
    }
    public function index3()
    {

        return view('appl3');
    }
}
