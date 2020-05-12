<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TipoIdentificacion as TipoIdent;
use Illuminate\Support\Facades\Redirect;

class FacturaController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function home()
    {
        return Redirect::route('Factura');
    }

    public function index()
    {
        return view('Factura');
    }

}
