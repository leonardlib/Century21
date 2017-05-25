<?php

namespace App\Http\Controllers;

use App\Solicitud;
use Illuminate\Http\Request;
use App\Cliente;
use Datatables;

class ClienteController extends Controller
{

    public function __construct(){
       $this->middleware('auth');
    }




    public function index(){
    	$clientes = Cliente::all();
    	return  view('catalogos.clientes',['clientes' => $clientes]);    
    }





    public function store(Request $request){

    	$cliente = new Cliente($request->all());
    	$cliente->save();	

		return redirect()->route('clientes.index');
    
    }




    public function show(){}





    public function tabla(){
    	$clientes = Cliente::all();
    	$clientes = Datatables::of($clientes)->make(true);
    	return $clientes;
    }




    public function editar(Request $request){
    	$cliente = Cliente::find($request->id);
    	$cliente->fill($request->all());
    	$cliente->save();
    	return redirect()->route('clientes.index');

    }





    public function getCliente(){
    	$id = $_POST['id'];

    	$cliente = Cliente::find($id);

    	return $cliente;
    }







    public function eliminar(){
    	$id = $_POST['id'];

    	$cliente = Cliente::find($id);

    	$cliente->delete();
    }

    public function verPdf($id_cliente){
        $cliente = Cliente::find($id_cliente);
        $solicitudes = Solicitud::where('cliente_id', $id_cliente)->orderBy('fecha')->get();

        $pdf = \PDF::loadView('PDF.clientes',['cliente' => $cliente, 'solicitudes'=> $solicitudes]);

        return $pdf->stream();
    }

}
