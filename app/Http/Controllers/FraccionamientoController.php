<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fraccionamiento;
use Datatables;

class FraccionamientoController extends Controller
{

	public function __construct(){
        $this->middleware('auth');
    }




    public function index(){
    	$fraccionamientos = Fraccionamiento::all();
    	return view('catalogos.fraccionamiento',["fraccionamientos" => $fraccionamientos]);
    }




    public function store(Request $request){
    	$fraccionamiento = new Fraccionamiento($request->all());
    	$fraccionamiento->save();
    	return redirect()->route('fraccionamientos.index');
    }




    public function editar(Request $request){
    	$fraccionamiento = Fraccionamiento::find($request->id);
    	$fraccionamiento->fill( $request->all() );
    	$fraccionamiento->save();
    	return redirect()->route('fraccionamientos.index');
    }




    public function eliminar(){
    	$id = $_POST['id'];
    	$fraccionamiento = Fraccionamiento::find($id);
    	$fraccionamiento->delete();
    }




    public function tabla(){
    	$fraccionamientos = Fraccionamiento::all();
    	$fraccionamientos = Fraccionamiento::of($fraccionamientos)->make(true);

    	return $fraccionamientos;
    }



    public function getFraccionamiento(){
    	$id = $_POST['id'];
    	$fraccionamiento = Fraccionamiento::find($id);
    	return $fraccionamiento;
    }
    

}
