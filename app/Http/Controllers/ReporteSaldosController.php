<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;

class ReporteSaldosController extends Controller
{
    public function index(){
    	//$saldos = Clientes::all();
    	return view('reportes.saldos');
    }
}
