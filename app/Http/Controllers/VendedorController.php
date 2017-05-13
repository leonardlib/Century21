<?php

namespace App\Http\Controllers;
use App\Vendedor;
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

}
