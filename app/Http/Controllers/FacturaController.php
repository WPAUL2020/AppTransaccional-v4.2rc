<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ciudad as nombreciudad;
use App\MedioPago as metodoPago;
use App\Servicio as tipoSevicio;
use App\EmpresaTercero as empresa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class FacturaController extends Controller
{
    protected $request;
    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->request = $request;
    }

    public function redirecTO()
    {
        $validateMessage = [
            "required" => "Este campo es obligatorio", "numeric" => "Este campo solo permite números",
            "min" => "Este campo debe tener mínimo :min dígitos"
        ];
        if ($this->request->pais === 'Colombia') {
                $this->request->validate([
                    'Nit' => 'required|numeric|min:10',
                    'mPago' => 'required',
                    'docN' => 'required|numeric|min:3',
                    'service' => 'required',
                    'cantidad' => 'required|numeric|min:1',
                    'date' => 'required',
                    'direc' => 'required',
                    'ciudad' => "required",
                    'obser' => 'max:255',
                ],  $validateMessage);

                DB::select(
                    'call InsertFactura(?,?,?,?,?,?,?,?,?,?)',
                    [
                        $this->request->Nit,
                        $this->request->mPago,
                        $this->request->docN,
                        $this->request->service,
                        $this->request->cantidad,
                        $this->request->date,
                        $this->request->direc,
                        $this->request->pais,
                        $this->request->ciudad,
                        $this->request->obser
                    ]
                );
                return Redirect::action('FacturaController@Factura', [
                    'nit' => $this->request->Nit
                ]);
        } else {
            return Auth::logout();
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
        $response = DB::select(
                                'call GenerarFactura (?)',
                                [
                                    $this->request->nit
                                ]);
        return view('Factura', compact('response'));
    }
}
