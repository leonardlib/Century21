<?php

namespace App\Http\Controllers;

use App\Contratos;
use App\Fraccionamiento;
use App\Mensualidad;
use App\Solicitud;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class ContratosController extends Controller {
    
    public function index() {
        $solicitudes = Solicitud::all();
        $fraccionamientos = Fraccionamiento::all();
        $contratos = Contratos::all();
        
        return view(
            'movimientos.contratos', [
                'solicitudes' => $solicitudes,
                'fraccionamientos' => $fraccionamientos,
                'contratos' => $contratos
            ]
        );
    }

    public function store(Request $request) {
        $id_solicitud = $request->input('solicitud_id');
        $saldo = $request->input('saldo-1');
        $plazo = $request->input('plazo');
        $monto_mensual = $request->input('monto_mensual');
        $fecha = $request->input('fecha');

        $solicitud = Solicitud::find($id_solicitud);

        $id_fraccionamiento = $solicitud->fraccionamiento_id;

        $contrato = Contratos::create([
            'solicitud_id' => $id_solicitud,
            'fraccionamiento_id' => $id_fraccionamiento,
            'saldo' => $saldo,
            'plazo' => $plazo,
            'monto_mensual' => $monto_mensual,
            'fecha' => $fecha
        ]);

        $contrato->save();

        $fecha_aux = new DateTime($fecha);
        $plazo = intval($plazo);

        while ($plazo > 0) {
            $fecha_nueva = Carbon::createFromFormat('Y-m-d H:i:s', $fecha_aux->format('Y-m-d H:i:s'));
            $fecha_nueva->addMonths($plazo);
            Mensualidad::create([
                'contrato_id' => $contrato->id,
                'monto' => $contrato->monto_mensual,
                'fecha' => $fecha_nueva->toDateTimeString(),
                'pagado' => false
            ]);
            $plazo--;
        }

        return redirect()->route('contratos.index');
    }

    public function editar(Request $request){
        $id = $_POST['id'];

        $contrato = Contratos::find($id);

        $contrato->fill($request->all());

        $contrato->save();

        return redirect()->route('contratos.index');
    }

    public function eliminar(){
        $id = $_POST['id'];

        $solicitud = Contratos::find($id);

        $solicitud->delete();

        return redirect()->route('contratos.index');   
    }

    public function getContrato(){
        $id = $_POST['id'];

        $contrato = Contratos::find($id);

        return $contrato;
    }
}
