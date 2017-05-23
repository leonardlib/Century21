<?php

namespace App\Http\Controllers;

use App\Contratos;
use App\Fraccionamiento;
use App\Mensualidad;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Enganche;
use App\Solicitud;
use App\Recibo;

class MensualidadController extends Controller
{
    public function index(Request $request) {
        $solicitudes = Solicitud::all();
        $fraccionamientos = Fraccionamiento::all();
        $contratos = Contratos::all();
        $mensualidades = Mensualidad::where('pagado', true)->get();

        return view(
            'movimientos.mensualidades', [
                'solicitudes' => $solicitudes,
                'fraccionamientos' => $fraccionamientos,
                'contratos' => $contratos,
                'mensualidades' => $mensualidades
            ]
        );
    }

    public function store(Request $request) {


        return redirect()->route('mensualidades.index');
    }

    public function contrato(Request $request) {
        $id_contrato = $request->input('id_contrato');

        $mensualidades_pagar = Mensualidad::where('contrato_id', $id_contrato)
                                            ->where('pagado', false)
                                            ->get();

        return response()->json([
            'mensualidades' => $mensualidades_pagar
        ]);
    }
}
