<?php

namespace App\Http\Controllers;

use App\Contratos;
use App\Fraccionamiento;
use App\Solicitud;
use Illuminate\Http\Request;

class ContratosController extends Controller {
    public function index(Request $request) {
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

        Contratos::create([
            'solicitud_id' => $id_solicitud,
            'fraccionamiento_id' => $id_fraccionamiento,
            'saldo' => $saldo,
            'plazo' => $plazo,
            'monto_mensual' => $monto_mensual,
            'fecha' => $fecha
        ]);

        return redirect()->route('contratos.index');
    }
}
