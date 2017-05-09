<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $table = "vendedores";

    protected $fillable = ["nombre","calle","colonia","telefono","celular1","celular2","email","comision"];

    public function solicitud(){
    	$this->hasMany('App\Solicitud','vendedor_id','id');
    }

    

}
