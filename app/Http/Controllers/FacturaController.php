<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\MedioPago as metodoPago;
use App\ciudad as nombreciudad;
use App\Servicio as tipoSevicio;
use Illuminate\Support\Facades\DB;

class FacturaController extends Controller
{
    protected $request;

    public function __construct(Request $request) {
        $this->middleware('auth');
        $this->request = $request;
    }

    public function redirecTO()
    {
        $validateMessage = ["required" => "Este campo es obligatorio", "numeric" => "Este campo solo permite números",
        "min" => "Este campo debe tener mínimo :min dígitos"];
        if ($this->request->pais === 'Colombia') {
            $this->request->validate([
                'Nit' => 'required|numeric|min:10',
                'mPago' => 'required',
                'docN' => 'required|numeric|min:3',
                'service' => 'required',
                'cantidad' => 'required|numeric|min:1',
                'date' => 'required',
                'direc' => 'required',
                "ciudad" => "required",
            ],  $validateMessage);
            return Redirect::route('Factura');
        } else {
            # code...
        }

    }

    public function index()
    {
        $metodoPago = metodoPago::all();
        $nombreciudad = nombreciudad::all();
        $tipoSevicio = tipoSevicio::all();
        return view('generarFactura', compact('metodoPago', 'nombreciudad', 'tipoSevicio'));
    }

    public function Factura()
    {
        return view('Factura');
    }

}
