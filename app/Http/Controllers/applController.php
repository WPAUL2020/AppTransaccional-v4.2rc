<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\MedioPago as metodoPago;
use App\ciudad as nombreciudad;
use App\Servicio as tipoSevicio;
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
        $metodoPago = metodoPago::all();
        $nombreciudad = nombreciudad::all();
        $tipoSevicio = tipoSevicio::all();

        return view('appl', compact('metodoPago', 'nombreciudad', 'tipoSevicio'));
    }
}
