<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

	protected $table = "clientes";

	protected $fillable = ["nombre","calle","colonia","telefono","ife","saldo"];

    public function solicitud(){
        $this->hasMany('App\Solicitud','cliente_id','id');
    }
}
