<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Datatables;

class UsuarioController extends Controller{

    public function index(){
		$usuarios = User::all();
		return view('catalogos.usuarios',['usuarios'=>$usuarios]);	
    }
    
    
    public function store(Request $request){
    	
    	//Encriptar la contrasena
    	$contrasena = bcrypt($request->password);  	
 
    	$nombre = $request->nombre;
    	$correo = $request->email;
    
    	
    	$usuario = new User(['name'=>$nombre,'email'=>$correo,'password'=>$contrasena]);
    	$usuario->save();
    	
    	return redirect()->route('usuarios.index');
    }
    
    public function editar(Request $request){
    	$id = $_POST['id'];
    	
    	$usuario = User::find($id);
    	
    	//Encriptar la contrasena
    	$contrasena = bcrypt($request->contrasena);  	
    	
    	$nombre = $request->nombre;
    	$correo = $request->correo;
    	
    	$usuario = User::fill(['name'=>$nombre,'email'=>$correo,'password'=>$contrasena]);
    	
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
}
