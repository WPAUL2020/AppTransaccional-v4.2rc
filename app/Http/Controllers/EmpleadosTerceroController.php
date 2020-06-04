<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\EmpleadosTercero as EmpleadosTercero;
use App\role as rol;
use App\cargo as cargo;
use App\Ciudad as Ciudad;
use App\EmpresaTercero as EmpresaTercero;
use App\TipoIdentificacion as TipoIdent;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class EmpleadosTerceroController extends Controller
{
    public function mostrarEmpleadosTer(Request $request) //Invocamos el request el cual tiene la informacion de usuario que realizo la peticion
    {
        $request->user()->authorizeRoles(['SUPERVISOR EXTERNO' , 'ADMINISTRADOR']); //Accedemos al request que es la informaciòn del usuario y como ingresamos al modelu Users podemos ingresar a las funciones que estan alli en este caso es el proceso de autorizacion
        //aca deja ingresar a los usuarios que dentro del rol tenga los que emos descrito en la parte de arriba
        //Si no esta autorizado nos envia a la vista de la respuesta http 401 en la cual esta en las vistas errors
        if (Auth::check()){
            $user = Auth::user();
            // print($user->ID_EMPRESA_TERCERO);
            // print($user->name);
            // print($user->email);
            $empleados = EmpleadosTercero::where ('ID_EMPRESA_TERCERO',$user->ID_EMPRESA_TERCERO) ->get();
            $empresa = EmpresaTercero::where ('ID_EMPRESA_TERCERO',$user->ID_EMPRESA_TERCERO)->first();// Para traer los usuarios al cual pertenece esa empresa
            $documento = TipoIdent::where ('ID_TIPO_INDENTIFICACION' , $user->ID_TIPO_INDENTIFICACION)->first(); //Envia informacion de la tabla tipo de datos
            // print ($empresa->ID_EMPRESA_TERCERO);
            // var_dump($empleados);
            return view('GesUserTerVista') ->with(["empleados"=>$empleados , 'empresa'=>$empresa , 'documento'=>$documento]);
            // ->with(["empleados"=>$empleados , 'empresa'=>$empresa ])

        } else {
            return redirect('/login');
        }
    }

    public function InsertEmpleadoTercerorEmpleadosTer()
    {
            $data = DB::select('EXEC InsertEmpleadoTercero');
            dump($data); //Para insertar la informacion y llamar el procedimiento almacenado
    }
   //Valida los campos que trae desde la vista y manda a guardar en la base de datos
    public function guardar(Request $EmpleadosTercero)
    {
        //Para validar campo a campo segun la regla que se le haya puesto
        $reglas_Validacion =["ID_TIPO_INDENTIFICACION" =>"required|min:1", "NUM_DOCUMENTO" =>"numeric|min:3", "NOMBRE" =>"required|min:3",
        "DIRECCION" =>"required|min:3", "TELEFONO" =>"numeric|min:3", "CIUDAD" =>"required|min:3",
        "CORREO" =>"required|min:3", "TELEFONO_OFICINA" =>"numeric|min:3", "EXTENSION" =>"numeric|min:3", /* "USUARIO" =>"unique:empleado_tercero,USUARIO|required|min:3", */ "CONTRASENA" =>"required|min:3",
        "ID_CARGO" =>"required|min:1", "ID_ROL" =>"required|min:1", /* "ESTADO" =>"required|min:3", */ "ID_EMPRESA_TERCERO" =>"required|min:1" ];
       //Mensajes que tiene cada alerta
        $mensajes = ["required" => "Este campo es obligatorio", "alpha" => "Este campo solo permite Letras", "numeric" => "Este Campo Solo Permite Numeros",
            "min" => "Este Campo Debe Tener Minimo :min Digitos", "unique" => "Este Campo ya esta Registrado", "exists" => "Este Campo Debe Existir"];
       $this->validate($EmpleadosTercero, $reglas_Validacion, $mensajes);
        $EmpleadosTercero = DB::select(
            'call InsertEmpleadoTercero(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ',
            array(
       $EmpleadosTercero -> ID_TIPO_INDENTIFICACION,
       $EmpleadosTercero -> NUM_DOCUMENTO,
       $EmpleadosTercero -> NOMBRE,
       $EmpleadosTercero -> DIRECCION ,
       $EmpleadosTercero -> TELEFONO ,
       'COLOMBIA',
       $EmpleadosTercero -> CIUDAD,
       $EmpleadosTercero -> CORREO,
       $EmpleadosTercero -> TELEFONO_OFICINA,
       $EmpleadosTercero -> EXTENSION,
       $EmpleadosTercero -> OBSERVACION,
       $EmpleadosTercero -> USUARIO,
       bcrypt($EmpleadosTercero -> CONTRASENA),
       'ESTADO',
       $EmpleadosTercero -> ID_CARGO,
       $EmpleadosTercero -> ID_ROL,
       $EmpleadosTercero -> ID_EMPRESA_TERCERO));
       return Redirect('UsuariosTercero')->with("mensaje" , "Registro Exitoso");
   }
  //Accion la cual esta en la ruta la que indica que debe mostrar el formulario para llenar la informacion lee los modelos que pasamos y los envia en la peticion get
   public function getFrmInsertTercero()
   {
    $user = Auth::user();
    $empresa = EmpresaTercero::where ('ID_EMPRESA_TERCERO',$user->ID_EMPRESA_TERCERO)->get();
    $roles = rol::where ('dependency', "EXTERNO") ->get();
    // $roles = rol::where ('dependency'->EXTERNO)->get();
    $cargos = cargo::all();
    $TipoIdents = TipoIdent::all();
    $Ciudad = Ciudad::all();
    $EmpresaTerceros = EmpresaTercero::all();
    return view('GesUserTerCrear')->with(['roles'=>$roles, 'cargos'=>$cargos, 'TipoIdents'=>$TipoIdents, 'empresa'=>$empresa , 'Ciudad'=>$Ciudad]);
   }
  //Valida campos y los envia a guardar
   public function changeUser(Request $EmpleadosTercero,$ID_EMPLEADO_TERCERO)
   {
    $reglas_Validacion =["DIRECCION" =>"required|min:3", "TELEFONO" =>"numeric|min:3", "CIUDAD" =>"required|min:3",
    /* "CORREO" =>"required|min:3",  */"TELEFONO_OFICINA" =>"numeric|min:3", "EXTENSION" =>"numeric|min:3",
    "ID_CARGO" =>"required|min:3", "ID_ROL" =>"required|min:1"/* , "OBSERVACION" =>"required|min:3", "ESTADO" =>"required|min:3",  "ID_EMPRESA_TERCERO" =>"required|min:3" */ ];
   $mensajes = ["required" => "Este campo es obligatorio", "alpha" => "Este campo solo permite Letras", "numeric" => "Este Campo Solo Permite Numeros",
        "min" => "Este Campo Debe Tener Minimo :min Digitos", "unique" => "Este Campo ya esta Registrado", "exists" => "Este Campo Debe Existir"];
       $this->validate($EmpleadosTercero, $reglas_Validacion, $mensajes);
       $EmpleadosTercero=EmpleadosTercero::find($ID_EMPLEADO_TERCERO);
       $EmpleadosTercero -> DIRECCION  = $_POST["DIRECCION"];
       $EmpleadosTercero -> TELEFONO = $_POST["TELEFONO"];
       $EmpleadosTercero -> CIUDAD = $_POST["CIUDAD"];
       'NOAPLICA@NOAPLICA.COM';
       $EmpleadosTercero -> TELEFONO_OFICINA = $_POST["TELEFONO_OFICINA"];
       $EmpleadosTercero -> EXTENSION = $_POST["EXTENSION"];
       $EmpleadosTercero -> ID_CARGO = $_POST["ID_CARGO"];
       $EmpleadosTercero -> ID_ROL = $_POST["ID_ROL"];
       'NO APLICA';
       $EmpleadosTercero->save();
       return redirect('/UsuariosTercero')->with("mensaje", "Usuario Actualizado correctamente");
       //return $id;
   }
  // Invocar el formulario editar con el id de registro que se va a editar
   public function updateUser($ID_EMPLEADO_TERCERO)
   {
       if (Auth::check()) {
           $EmpleadosTercero = EmpleadosTercero::find($ID_EMPLEADO_TERCERO);
           $roles = rol::where ('dependency', "EXTERNO") ->get();
           $cargos = cargo::all();
           $TipoIdents = TipoIdent::all();
       return view('GesUserTerEdit')->with(['roles'=>$roles, 'cargos'=>$cargos, 'TipoIdents'=>$TipoIdents, 'EmpleadosTercero' =>$EmpleadosTercero]);
   } else{
       return redirect('/GesUserTerVista');
        }
    }
}
