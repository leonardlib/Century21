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
}
