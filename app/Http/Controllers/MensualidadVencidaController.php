<?php

namespace App\Http\Controllers;

use App\Mensualidad;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Enganche;
use App\Solicitud;
use App\Recibo;

class MensualidadVencidaController extends Controller {
    public function index(){
        $mensualidades = Mensualidad::whereDate('fecha', '<', Carbon::now()->toDateString())->get();
        dd($mensualidades);

        return view('movimientos.mensualidadesVencidas', ['mensualidades' => $mensualidades]);
    }
}
