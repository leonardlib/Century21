<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;

class SolicitudController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
    	$solicitudes = Solicitud::all();
    	return view('movimientos.solicitudes',["solicitudes"=>$solicitudes]);
    }

    public function store(Request $request){
    	$solicitud = new Solicitud($request->all());
    	$solicitud->save();

    	return redirect()->route("solicitudes.index");
    }

    public function getSolicitud(){
    	$id = $_POST['id'];

    	$solicitud = Solicitud::find($id);

    	return $solicitud;
    }

    public function editar(Request $request){
    	$solicitud = Solicitud::find($request->id);

    	$solicitud->fill($request->all());

    	$solicitud->save();

    	return redirect()->route('solicitudes.index');
    }

}
