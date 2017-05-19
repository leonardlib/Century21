<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enganche;
use App\Solicitud;

class EngancheController extends Controller
{
    public function index(){
    	$enganches = Enganche::all();
    	$solicitudes = \DB::table('solicitudes')
    					->join('clientes', 'clientes.id','=', 'solicitudes.cliente_id')
    					->join('vendedores','vendedores.id','=','solicitudes.vendedor_id')
    					->join('fraccionamientos','fraccionamientos.id','=','solicitudes.fraccionamiento_id')
    					->select('clientes.nombre as nombre',
    							'fraccionamientos.nombre as fraccionamiento',
    							'solicitudes.no_lote as lote',
    							'solicitudes.manzana as manzana',
    							'solicitudes.enganche as enganche',
    							'solicitudes.id as id'
    					)->get();
    	return view('movimientos.enganches',['solicitudes'=>$solicitudes]);
    }
}
