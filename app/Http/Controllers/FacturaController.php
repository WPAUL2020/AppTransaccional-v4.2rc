<?php

namespace App\Http\Controllers;
use App\TipoIdentificacion as TipoIdent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacturaController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function home()
    {
        return redirect('/');
    }

}
