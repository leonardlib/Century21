<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReporteSaldosVencidosController extends Controller
{
    public function index(){
    	return view('reportes.saldosVencidos');
    }
}
