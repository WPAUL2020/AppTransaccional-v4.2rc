<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

/* use Illuminate\Http\Request; */

class applController extends Controller
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
    public function index(Request $request)
    {
        if ($request->user()->authorizeRoles1('ADMINISTRADOR'))
        {
            return view('appl');
        } else
        if ($request->user()->authorizeRoles1(['SUPERVISOR EXTERNO']))
        {
            return view('appl4');
        }

        if ($request->user()->authorizeRoles1(['EMPLEADO EXTERNO']))
        {
            return view('appl3');
        }
    }
    public function index2()
    {
        return view('appl2');
    }
}
