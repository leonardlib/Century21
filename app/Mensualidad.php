<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensualidad extends Model {
    protected $table = 'mensualidades';

    protected $fillable = [
        'contrato_id',
        'monto',
        'fecha',
        'pagado'
    ];

    public function contrato(){
        return $this->belongsTo('App\Contratos');
    }
}
