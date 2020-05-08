<?php

namespace App\Http\Controllers;
use App\TipoIdentificacion as TipoIdent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacturaController extends Controller
{
    public function BuscarFactura()
    {
        $TipoIdents = TipoIdent::all();
        return view('FacturaBuscar')->with(['TipoIdents'=>$TipoIdents]);
    }

    public function MostrarFactura(Request $Factura)
    {
        $data = DB::select('EXEC InsertFactura');
            dump($data);

    }
}
