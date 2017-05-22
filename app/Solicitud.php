<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model{
	
    protected $table = "solicitudes";

	protected $fillable = ["fecha","fraccionamiento_id","cliente_id","vendedor_id","no_lote","manzana","frente","fondo","superficie","precio_metro","enganche","precio_total"];


	public function fraccionamiento(){
		return $this->belongsTo('App\Fraccionamiento');
	}

	public function vendedor(){
		return $this->belongsTo('App\Vendedor');
	}

	public function cliente() {
	    return $this->belongsTo('App\Cliente');
    }

	public function enganche(){
		return $this->hasOne('App\Enganche','solicitud_id','id');
	}

    public function contrato(){
        return $this->belongsTo('App\Contratos');
    }

}
