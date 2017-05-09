<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enganche extends Model
{
    protected $table = "enganches";

    protected $fillable = ["solicitud_id","saldo_enganche","recibo_id"];

    public function solicitud(){
    	$this->belongsTo('App\Solicitud');
    }

    public function recibo(){
    	$this->hasOne('App\Recibo','recibo_id','id');
    }

}
