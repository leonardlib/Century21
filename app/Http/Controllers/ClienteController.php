<?php

namespace App\Http\Controllers;

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

}
