<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    public function index(){
    	//echo "solicitudes";
    	return view('movimientos.solicitudes');
    }
}
