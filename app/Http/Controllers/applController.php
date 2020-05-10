<?php

namespace App\Http\Controllers;
use App\metodoPago as metodoPago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        /* dd($metodoPago = metodoPago::all()); */
        return view('appl');
    }
}
