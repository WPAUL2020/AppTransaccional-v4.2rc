<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\GestionClientes as clientes;
use App\sector_empresa_tercero as SectorEmpresa;
use App\role as rol;
use App\Ciudad as Ciudad;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
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

    public function Clientes(Request $request)
    {
        $request->user()->authorizeRoles('ADMINISTRADOR');
        if (Auth::check()){
            $clientes = Clientes::paginate(10);
            return view('Clientes') ->with("Clientes",$clientes);
        } else {
            return redirect('/login');
        }
    }

    public function InsertEmpresa()
    {
            $data = DB::select('EXEC InsertEmpresaTercero');
            dump($data);
    }

    public function guardar(Request $clientes)
    {
        $reglas_Validacion =["ID_SECTOR_EMPRESA_TERCERO"=>"required|min:1","NOMBRE"=>"required|min:3","DIRECCION"=>"required|min:3","TELEFONO"=>"required|numeric|min:3","CIUDAD"=>"required|min:3","CORREO" =>"unique:empresa_tercero,CORREO|required|min:3","WEBSITE"=>"required|min:3","NIT"=>"required|numeric|min:3","USUARIO" =>"unique:empresa_tercero,USUARIO|required|min:3","CONTRASENA"=>"required|min:3","ID_ROL"=>"required|min:1","ESTADO"=>"required|min:3"];
       $mensajes = ["required" => "Este campo es obligatorio", "alpha" => "Este campo solo permite Letras", "numeric" => "Este Campo Solo Permite Numeros",
            "min" => "Este Campo Debe Tener Minimo :min Digitos", "unique" => "Este Campo ya esta Registrado", "exists" => "Este Campo Debe Existir"];
       $this->validate($clientes, $reglas_Validacion, $mensajes);
        $clientes = DB::select(
            'call InsertEmpresaTercero(?,?,?,?,?,?,?,?,?,?,?,?,?,?) ',
            array(
       $clientes -> ID_SECTOR_EMPRESA_TERCERO,
       $clientes -> NOMBRE,
       $clientes -> DIRECCION,
       $clientes -> TELEFONO,
       'COLOMBIA',
       $clientes -> CIUDAD,
       $clientes -> CORREO,
       $clientes -> WEBSITE,
       $clientes -> NIT,
       $clientes -> USUARIO,
       bcrypt($clientes -> CONTRASENA),
       $clientes -> ID_ROL,
       $clientes -> ESTADO,
       $clientes -> OBSERVACION));
       return Redirect('Clientes')->with("mensaje" , "El Cliente Registro Exitoso");
   }

    public function GestionClientes(Request $request)
    {
        $request->user()->authorizeRoles('ADMINISTRADOR');
        if (Auth::check()) {
            $users1 = \App\GestionClientes::paginate(10);
            return view('GestionClientes')->with("users", $users1);
        } else {
            return redirect('/login');
        }
    }

    public function getFrmInsertEmpresa()
    {
     $roles = rol::where ('dependency', "EXTERNO") ->get();
     $SectorEmpresas = SectorEmpresa::all();
     $Ciudad = Ciudad::all();
        return view('clientes')->with(['roles'=>$roles, 'SectorEmpresas'=>$SectorEmpresas, 'Ciudad'=>$Ciudad]);
    }

    public function changeEmpresa(Request $clientes,$ID_EMPRESA_TERCERO)
    {
        $reglas_Validacion =["DIRECCION" =>"required|min:3", "TELEFONO" =>"numeric|min:3", "CIUDAD" =>"required|min:3",
        "WEBSITE" =>"required|min:3", "CORREO" =>"required|min:3", "ESTADO" =>"required|min:1"];
       $mensajes = ["required" => "Este campo es obligatorio", "alpha" => "Este campo solo permite Letras", "numeric" => "Este Campo Solo Permite Numeros",
            "min" => "Este Campo Debe Tener Minimo :min Digitos", "unique" => "Este Campo ya esta Registrado", "exists" => "Este Campo Debe Existir"];
       $this->validate($clientes, $reglas_Validacion, $mensajes);
        $clientes=clientes::find($ID_EMPRESA_TERCERO);
        $clientes -> DIRECCION  = $_POST["DIRECCION"];
        $clientes -> TELEFONO = $_POST["TELEFONO"];
        $clientes -> CIUDAD = $_POST["CIUDAD"];
        $clientes -> WEBSITE = $_POST["WEBSITE"];
        $clientes -> CORREO = $_POST["CORREO"];
        $clientes->  ESTADO =$_POST["ESTADO"];
        $clientes->save();
        return redirect('/Clientes')->with("mensaje", "Usuario Actualizado correctamente");
        //return $id;
    }

    public function updateEmpresa($ID_EMPRESA_TERCERO)
    {
        if (Auth::check()) {
            $clientes = clientes::find($ID_EMPRESA_TERCERO);
            $roles = rol::all();
            $rol = rol::all();
            $SectorEmpresa = SectorEmpresa::all();
        return view('GestionClientesEdit')->with(['roles'=>$roles, 'rol'=>$rol, 'clientes' =>$clientes, 'SectorEmpresa'=>$SectorEmpresa]);
    } else{
        return redirect('/GestionClientes');
         }
     }
}
