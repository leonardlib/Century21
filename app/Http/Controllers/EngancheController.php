<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enganche;
use App\Solicitud;
use App\Recibo;

class EngancheController extends Controller
{
	public function index(){
		$recibos = \DB::table('recibos')
							->join('enganches','recibos.enganche_id','enganches.id')
							->join('solicitudes','solicitudes.id','enganches.id')
							->join('clientes','clientes.id','solicitudes.cliente_id')
							->select('recibos.id as recibo_id',
									'recibos.monto',
									'clientes.*',
									'recibos.concepto as concepto',
									'recibos.fecha as fecha',
									'solicitudes.*'
							)->get();

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

		//dd($recibos);

		return view('movimientos.enganches',['solicitudes'=>$solicitudes,'recibos'=>$recibos]);
	}
	
	public function store(Request $request){
		$enganche;
		$total_enganche = Solicitud::find($request->solicitud_id)->enganche;
		if(Enganche::find($request->solicitud_id)){
			$enganche = Enganche::find($request->solicitud_id);
			$enganche->saldo_enganche -= $request->monto;

			$enganche->save();
		}
		else{
			$enganche = new Enganche(['solicitud_id' => $request->solicitud_id,
									'recibo_id' => 0,
									'saldo_enganche' => $total_enganche - $request->monto
									]);
			
			$enganche->save();
		}
		
		$solicitud = Solicitud::find($request->solicitud_id);
		$solicitud->enganche = $total_enganche - $request->monto;
		$solicitud->save();

		$recibo = new Recibo(['fecha' => $request->fecha,
							'concepto' => $request->concepto,
							'monto'=>$request->monto,
							'enganche_id' => $enganche->id
							]);
		$recibo->save();
		
		//dd($recibo);

		return redirect()->route('enganches.index');
		
	}

	public function editar(Request $request) {
	    $id_enganche = $request->input('id');
	    $enganche = Recibo::find($id_enganche);
	    return response($enganche);
    }

}
