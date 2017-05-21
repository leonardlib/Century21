<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recibo extends Model
{
    protected $table = "recibos";

    protected $fillable = ["fecha","concepto","monto","enganche_id"];    

    public function enganche(){
    	$this->belongsTo('App\Enganche');
    }
    
}