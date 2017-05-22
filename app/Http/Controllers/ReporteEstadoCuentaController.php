<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Cuenta;

class ReporteEstadoCuentaController extends Controller
{
    public function index(){
  		//$cuentas = Cuenta::all();

    	return view('reportes.estadoCuenta');
    }
}
