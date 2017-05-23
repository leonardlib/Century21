<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ReporteSaldosController extends Controller
{
    public function index(){
    	$saldos = Cliente::all();

    	$total = $saldos->sum('saldo');

    	return view('reportes.saldos',['saldos' => $saldos, 'total'=>$total]);
    }

     public function verPdf(){
    	
    	$saldos = Cliente::all();

    	$total = $saldos->sum('saldo');
    	//dd($solicitudes);

    	$pdf = \PDF::loadView('PDF.saldos',['saldos' => $saldos, 'total'=> $total]);

    	
    	return $pdf->stream();
    }

}
