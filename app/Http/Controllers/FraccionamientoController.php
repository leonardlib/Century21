<?php
namespace App\Http\Controllers;

use App\Cliente;
use App\Solicitud;
use Carbon\Carbon;
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

    public function verPdf($id_fraccionamiento){
        $fraccionamiento = Fraccionamiento::find($id_fraccionamiento);
        $solicitudes = Solicitud::where('fraccionamiento_id', $id_fraccionamiento)->orderBy('fecha')->get();
        $fecha = Carbon::now();

        $pdf = \PDF::loadView('PDF.fraccionamiento',['solicitudes' => $solicitudes, 'fraccionamiento'=> $fraccionamiento, 'fecha' => $fecha]);

        return $pdf->stream();
    }

}
