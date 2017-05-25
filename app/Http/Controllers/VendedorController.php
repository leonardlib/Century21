<?php

namespace App\Http\Controllers;
use App\Solicitud;
use App\Vendedor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Datatables;

class VendedorController extends Controller
{
 


    public function index(){
        $vendedores = Vendedor::all();
        return view('catalogos.vendedores',['vendedores' => $vendedores]);
    }




    public function store(Request $request){
        $vendedor = new Vendedor($request->all());
        $vendedor->save();

        return redirect()->route("vendedores.index");
    }




    public function tabla(){
        $vendedores = Vendedor::all();

        return Datatables::of($vendedores)->make(true);
    }





    public function eliminar(){
        $id = $_POST['id'];

        $vendedor = Vendedor::find($id);

        $vendedor->delete();

        return redirect()->route('vendedores.index');
    }





    public function editar(Request $request){

        $vendedor = Vendedor::find($request->id);

        $vendedor->fill($request->all());

        $vendedor->save();

        return redirect()->route('vendedores.index');
    }

    


    public function getVendedor(){
        $id = $_POST['id'];

        $vendedor = Vendedor::find($id);

        return $vendedor;
    }

    public function verPdf($id_vendedor) {
        $vendedor = Vendedor::find($id_vendedor);
        $solicitudes = Solicitud::where('vendedor_id', $id_vendedor)->orderBy('fecha')->get();
        $fecha = Carbon::now();

        $pdf = \PDF::loadView('PDF.vendedores',['solicitudes' => $solicitudes, 'vendedor'=> $vendedor, 'fecha' => $fecha]);
        return $pdf->stream();
    }

}
