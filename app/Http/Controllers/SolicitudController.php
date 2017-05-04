<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
    	//echo "solicitudes";
    	return view('movimientos.solicitudes');
    }
}
