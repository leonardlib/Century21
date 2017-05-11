<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Fraccionamiento;
use App\Vendedor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Solicitud;
use Datatables;

class SolicitudController extends Controller
{


    public function __construct(){
        $this->middleware('auth');
    }



    public function index() {
    	$solicitudes = Solicitud::all();
    	$clientes = Cliente::all();
    	$fraccionamientos = Fraccionamiento::all();
    	$vendedores = Vendedor::all();

    	return view(
    	    'movimientos.solicitudes',
            [
                "solicitudes"=>$solicitudes,
                "vendedores" => $vendedores,
                "clientes" => $clientes,
                "fraccionamientos" => $fraccionamientos
            ]
        );
    }



    public function store(Request $request){
        $solicitud = new Solicitud($request->all());
    	$solicitud->save();

    	return redirect()->route("solicitudes.index");
    }




    public function getSolicitud(){
    	$id = $_POST['id'];
    	$solicitud = Solicitud::find($id);
    	return response()->json([
    	    $solicitud,
            Carbon::parse($solicitud->fecha)->format('Y-m-d')
        ]);
    }




    public function editar(Request $request){
    	$solicitud = Solicitud::find($request->id);
    	$solicitud->fill($request->all());
    	$solicitud->save();
    	return redirect()->route('solicitudes.index');
    }




    public function eliminar(){
        $id = $_POST['id'];
        $solicitud = Solicitud::find($id);
        $solicitud->delete();
    }





    public function tabla(){
        $solicitud = Solicitud::all();
        $solicitud = Solicitud::of($solicitud)->make(true);
        return $solicitud;
    }

}
