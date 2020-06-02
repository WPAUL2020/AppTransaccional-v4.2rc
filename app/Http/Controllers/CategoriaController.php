<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ProductosTercero as Categoria;
use App\EmpresaTercero as EmpresaTercero;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    public function mostrarCategoria(Request $request)
    {
        $request->user()->authorizeRoles(['SUPERVISOR EXTERNO' , 'ADMINISTRADOR', 'EMPLEADO EXTERNO']);
        if (Auth::check()){
            $user = Auth::user();
            $Categoria = Categoria::where ('ID_EMPRESA_TERCERO',$user->ID_EMPRESA_TERCERO)->get();
            $empresa = EmpresaTercero::where ('ID_EMPRESA_TERCERO',$user->ID_EMPRESA_TERCERO)->first();
            return view('CategoriaVista') ->with(["Categoria"=>$Categoria , 'empresa'=>$empresa ]);
        } else {
            return redirect('/login');
        }
    }

    public function AgregarCategoria()
    {
        if (Auth::check()) {
            $users1 = Categoria::paginate(10);
            return view('CategoriaCrear')->with("Categorias", $users1);
        } else {
            return redirect('/login');
        }
    }

    public function InsertCategoria()
    {
            $data = DB::select('EXEC InsertProductoServicioTercero');
            dump($data);
    }

   public function guardar(Request $Categoria)
   {
    $reglas_Validacion =["NOMBRE_PRODUCTO_SERV_T" =>"unique:producto_servicio_tercero,NOMBRE_PRODUCTO_SERV_T|required|min:3" , "DETALLE_PRODUCTO_SERV_T" =>"required|min:1", "ID_EMPRESA_TERCERO" =>"required|min:1"];
    $mensajes = ["required" => "Este campo es obligatorio", "alpha" => "Este campo solo permite Letras", "numeric" => "Este Campo Solo Permite Numeros",
         "min" => "Este Campo Debe Tener Minimo :min Digitos", "unique" => "Este Campo ya esta Registrado", "exists" => "Este Campo Debe Existir"];
    $this->validate($Categoria, $reglas_Validacion, $mensajes);
       $Categoria = DB::select(
           'call InsertProductoServicioTercero(?,?,?) ',
           array(
      $Categoria -> NOMBRE_PRODUCTO_SERV_T,
      $Categoria -> DETALLE_PRODUCTO_SERV_T,
      $Categoria -> ID_EMPRESA_TERCERO));
      return Redirect('Categorias')->with("mensaje" , "Registro Exitoso");
  }

   public function __construct()
   {
       $this->middleware('auth');
   }
   public function getFrmInsertCategoria()
   {
    $user = Auth::user();
    $empresa = EmpresaTercero::where ('ID_EMPRESA_TERCERO',$user->ID_EMPRESA_TERCERO)->get();
       return view('CategoriaCrear')->with([ 'empresa'=>$empresa]);
   }
}
