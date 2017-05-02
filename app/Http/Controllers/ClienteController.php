<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{

    public function index(){
    	//$clientes = Cliente::all();
    	
    	return  view('catalogos.clientes');    
    
    }

    public function store(Request $request){

    	$cliente = new Cliente($request->all());
    	$cliente->save();	
    	return view('catalogos.clientes');
    
    }

}
