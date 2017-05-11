<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Fraccionamiento;
use App\Vendedor;
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
        $clienteId = $request->input('select-cliente');
        $vendedorId = $request->input('select-vendedor');
        $fraccId = $request->input('select-fracc');
        $fecha = $request->input('fecha');
        $lote = $request->input('lote');
        $manzana = $request->input('manzana');
        $frente = $request->input('frente');
        $fondo = $request->input('fondo');
        $superficie = $request->input('superficie');
        $precioMetro = $request->input('precio-metro');
        $enganche = $request->input('enganche');
        $precioTotal = $request->input('precio-total');

    	$solicitud = new Solicitud([
    	    'cliente_id' => $clienteId,
            'fraccionamiento_id' => $fraccId,
            'vendedor_id' => $vendedorId,
            'fecha' => $fecha,
            'no_lote' => $lote,
            'manzana' => $manzana,
            'frente' => $frente,
            'fondo' => $fondo,
            'superficie' => $superficie,
            'precio_metro' => $precioMetro,
            'enganche' => $enganche,
            'precio_total' => $precioTotal
        ]);
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
