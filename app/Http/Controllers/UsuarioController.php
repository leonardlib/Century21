<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;
use Datatables;

class UsuarioController extends Controller{

    public function index(){
		$usuarios = User::all();
		return view('catalogos.usuarios',['usuarios'=>$usuarios]);	
    }
    
    
    public function store(Request $request){
    	$usuario = new User($request->all());
    	$usuario->save();
    
    	return redirect()->route('usuarios.index');
    }
    
    public function editar(Request $request){
    	$id = $_POST['id'];
    	
    	$usuario = User::find($id);
    	
    	$usuario->fill($request->all());

        $usuario->save();
    	
    	return redirect()->route('usuarios.index');
    }
    
    public function eliminar(){
 		$id = $_POST['id'];
 		
 		$usuario = User::find($id);
 		
 		$usuario->delete();   	
    }
    
    public function getUsuario(){
    	$usuario = User::find($_POST['id']);
    	return $usuario;
    }
    
    public function tabla(){
    	$usuario = User::all();
        $usuario = User::of($usuario)->make(true);
        return $usuario;
    }

    public function verPdf($id_usuario){
        $usuario = User::find($id_usuario);
        $fecha = Carbon::now();

        $pdf = \PDF::loadView('PDF.usuarios',['usuario' => $usuario, 'fecha' => $fecha]);

        return $pdf->stream();
    }
}
