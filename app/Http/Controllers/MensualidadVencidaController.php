<?php

namespace App\Http\Controllers;

use App\Contratos;
use App\Mensualidad;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Enganche;
use App\Solicitud;
use App\Recibo;

class MensualidadVencidaController extends Controller {
    public function index(Request $request) {
        $contratos = Contratos::all();
        $mensualidades = Mensualidad::where('pagado', false)->get();

        return view('movimientos.mensualidadesVencidas', ['contratos' => $contratos, 'mensualidades' => $mensualidades]);
    }

    public function contrato(Request $request) {
        $id_contrato = $request->input('id_contrato');

        $mensualidades_pagar = Mensualidad::where('contrato_id', $id_contrato)
            ->where('pagado', false)
            ->get();

        return response()->json([
            'mensualidades_pagar' => $mensualidades_pagar
        ]);
    }
}
