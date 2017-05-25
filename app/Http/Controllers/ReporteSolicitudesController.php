<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Solicitud;

class ReporteSolicitudesController extends Controller
{
    public function index(){
    	
    	$solicitudes = \DB::table('solicitudes')
    					->join('clientes','clientes.id','solicitudes.cliente_id')
    					->join('vendedores','vendedores.id','solicitudes.vendedor_id')
    					->join('fraccionamientos','fraccionamientos.id','solicitudes.fraccionamiento_id')
    					->select('solicitudes.*',
    							'clientes.nombre as cliente',
    							'vendedores.nombre as vendedor',
    							'fraccionamientos.nombre as fraccionamiento'
						)->get();

		return view('reportes.solicitudes',['solicitudes'=>$solicitudes]);
    }


    public function verPdf(){
    	
    	$solicitudes = \DB::table('solicitudes')
    					->join('clientes','clientes.id','solicitudes.cliente_id')
    					->join('vendedores','vendedores.id','solicitudes.vendedor_id')
    					->join('fraccionamientos','fraccionamientos.id','solicitudes.fraccionamiento_id')
    					->select('solicitudes.*',
    							'clientes.nombre as cliente',
    							'vendedores.nombre as vendedor',
    							'fraccionamientos.nombre as fraccionamiento'
						)->get();


    	//dd($solicitudes);
        $fecha = Carbon::now();

    	$pdf = \PDF::loadView('PDF.solicitudes',['solicitudes' => $solicitudes, 'fecha' => $fecha]);

    	


        //Rescargar
        //return $pdf->download("Reporte_Solicitud.pdf");
    	
    	return $pdf->stream();
    }


}
