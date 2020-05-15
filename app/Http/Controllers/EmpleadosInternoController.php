<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\EmpleadosInterno as EmpleadosInterno;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\role as rol;
use App\cargo as cargo;
use App\TipoIdentificacion as TipoIdent;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class EmpleadosInternoController extends Controller
{


    public function InsertEmpleadoInternoInterno()
    {
         $data = DB::select('EXEC InsertEmpleadoInterno');
         dump($data);
    }

    public function mostrarEmpleadosInt(Request $request)
    {
        $request->user()->authorizeRoles('ADMINISTRADOR');
        $empleados = EmpleadosInterno::paginate(10);
            return view('GestUserIntVista') ->with("empleados",$empleados);
    }

    public function AgregarEmpleadosInt()
    {
        if (Auth::check()) {
            $users1 = \App\EmpleadosInterno::paginate(10);
            return view('GestUserIntCrear')->with("empleados", $users1);
        } else {
            return redirect('/login');
        }
    }

    public function guardar(Request $EmpleadosInterno)
    {
        $reglas_Validacion =["ID_TIPO_INDENTIFICACION" =>"required|min:1", "NUM_DOCUMENTO" =>"numeric|min:3", "NOMBRE" =>"required|min:3",
        "DIRECCION" =>"required|min:3", "TELEFONO" =>"numeric|min:3", "PAIS" =>"required|min:3", "CIUDAD" =>"required|min:3",
        "CORREO" =>"unique:empleado_interno,CORREO|required|min:3", "TELEFONO_OFICINA" =>"numeric|min:3", "EXTENSION" =>"numeric|min:3", "USUARIO" =>"unique:empleado_interno,USUARIO|required|min:3", "CONTRASENA" =>"required|min:3",
        "ID_CARGO" =>"required|min:1", "ID_ROL" =>"required|min:1", "OBSERVACION" =>"required|min:3", "ESTADO" =>"required|min:1" ];
       $mensajes = ["required" => "Este campo es obligatorio", "alpha" => "Este campo solo permite Letras", "numeric" => "Este Campo Solo Permite Numeros",
            "min" => "Este Campo Debe Tener Minimo :min Digitos", "unique" => "Este Campo ya esta Registrado", "exists" => "Este Campo Debe Existir"];
       $this->validate($EmpleadosInterno, $reglas_Validacion, $mensajes);
        $EmpleadosInterno = DB::select(
            'call InsertEmpleadoInterno(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ',
            array(
       $EmpleadosInterno -> ID_TIPO_INDENTIFICACION,
       $EmpleadosInterno -> NUM_DOCUMENTO,
       $EmpleadosInterno -> NOMBRE,
       $EmpleadosInterno -> DIRECCION ,
       $EmpleadosInterno -> TELEFONO ,
       $EmpleadosInterno -> PAIS,
       $EmpleadosInterno -> CIUDAD,
       $EmpleadosInterno -> CORREO,
       $EmpleadosInterno -> TELEFONO_OFICINA,
       $EmpleadosInterno -> EXTENSION,
       $EmpleadosInterno -> USUARIO,
       bcrypt($EmpleadosInterno -> CONTRASENA),
       $EmpleadosInterno -> OBSERVACION,
       $EmpleadosInterno -> ESTADO,
       $EmpleadosInterno -> ID_CARGO,
       $EmpleadosInterno -> ID_ROL,));
       return Redirect('UsuariosInterno')->with("mensaje" , " Registro Exitoso");
   }

   public function getFrmInsertInterno(Request $request)
   {
    $request->user()->authorizeRoles('ADMINISTRADOR');
    $roles = rol::all();
    $cargos = cargo::all();
    $TipoIdents = TipoIdent::all();
    return view('GestUserIntCrear')->with(['roles'=>$roles, 'cargos'=>$cargos, 'TipoIdents'=>$TipoIdents]);
   }

   public function changeUser(Request $EmpleadosInterno,$ID_EMPLEADO_INTERNO)
   {
    $reglas_Validacion =["DIRECCION" =>"required|min:3", "TELEFONO" =>"numeric|min:3", "CIUDAD" =>"required|min:3",
    "CORREO" =>"required|min:3", "TELEFONO_OFICINA" =>"numeric|min:3", "EXTENSION" =>"numeric|min:3",
    "ID_CARGO" =>"required|min:1", "ID_ROL" =>"required|min:1", "OBSERVACION" =>"required|min:3"];
   $mensajes = ["required" => "Este campo es obligatorio", "alpha" => "Este campo solo permite Letras", "numeric" => "Este Campo Solo Permite Numeros",
        "min" => "Este Campo Debe Tener Minimo :min Digitos", "unique" => "Este Campo ya esta Registrado", "exists" => "Este Campo Debe Existir"];
       $this->validate($EmpleadosInterno, $reglas_Validacion, $mensajes);
       $EmpleadosInterno=EmpleadosInterno::find($ID_EMPLEADO_INTERNO);
       $EmpleadosInterno -> DIRECCION  = $_POST["DIRECCION"];
       $EmpleadosInterno -> TELEFONO = $_POST["TELEFONO"];
       $EmpleadosInterno -> CIUDAD = $_POST["CIUDAD"];
       $EmpleadosInterno -> CORREO = $_POST["CORREO"];
       $EmpleadosInterno -> TELEFONO_OFICINA = $_POST["TELEFONO_OFICINA"];
       $EmpleadosInterno -> EXTENSION = $_POST["EXTENSION"];
       $EmpleadosInterno -> ID_CARGO = $_POST["ID_CARGO"];
       $EmpleadosInterno -> ID_ROL = $_POST["ID_ROL"];
       $EmpleadosInterno -> OBSERVACION = $_POST["OBSERVACION"];
       $EmpleadosInterno->save();
       return redirect('/UsuariosInterno')->with("mensaje", "Usuario Actualizado correctamente");
       //return $id;
   }

   public function updateUser($ID_EMPLEADO_INTERNO , Request $request)
   {
    $request->user()->authorizeRoles('ADMINISTRADOR');
       if (Auth::check()) {
           $EmpleadosInterno = EmpleadosInterno::find($ID_EMPLEADO_INTERNO);
           $roles = rol::all();
           $cargos = cargo::all();
           $TipoIdents = TipoIdent::all();
       return view('GestUserIntEdit')->with(['roles'=>$roles, 'cargos'=>$cargos, 'TipoIdents'=>$TipoIdents, 'EmpleadosInterno' =>$EmpleadosInterno]);
   } else{
       return redirect('/GestUserIntVista');
        }
    }

}
