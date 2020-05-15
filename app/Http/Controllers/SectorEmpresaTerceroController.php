<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\sector_empresa_tercero as Sector;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class SectorEmpresaTerceroController extends Controller
{
    public function mostrarSector(Request $request)
    {
        $request->user()->authorizeRoles('ADMINISTRADOR');
        if (Auth::check()){
            $sector = Sector::paginate(10);
            return view('SectEmprTercVista') ->with("sector",$sector);
        } else {
            return redirect('/login');
        }
    }

    public function AgregarSector()
    {
        if (Auth::check()) {
            $users1 = Sector::paginate(10);
            return view('SectEmprTerCrear')->with("sector", $users1);
        } else {
            return redirect('/login');
        }
    }

    public function InsertRol()
    {
            $data = DB::select('EXEC InsertSectorEmpresaTercero');
            dump($data);
    }

   public function guardar(Request $Sector)
   {
    $reglas_Validacion =["NOMBRE_SECTOR_EMPRESA_TERCERO" =>"unique:sector_empresa_tercero,NOMBRE_SECTOR_EMPRESA_TERCERO|required|min:3", "DESCRIPCION" =>"required|min:3"];
    $mensajes = ["required" => "Este campo es obligatorio", "alpha" => "Este campo solo permite Letras", "numeric" => "Este Campo Solo Permite Numeros",
         "min" => "Este Campo Debe Tener Minimo :min Digitos", "unique" => "Este Campo ya esta Registrado", "exists" => "Este Campo Debe Existir"];
    $this->validate($Sector, $reglas_Validacion, $mensajes);
       $Sector = DB::select(
           'call InsertSectorEmpresaTercero(?,?) ',
           array(
      $Sector -> NOMBRE_SECTOR_EMPRESA_TERCERO,
      $Sector -> DESCRIPCION));
      return Redirect('Sector')->with("mensaje" , "Registro Exitoso");
  }

  public function getFrmInsertSector()
  {
      return view('SectEmprTerCrear');
  }

   public function __construct()
   {
       $this->middleware('auth');
   }
}
