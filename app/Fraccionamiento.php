<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fraccionamiento extends Model
{
    protected $table = "fraccionamientos";
    protected $fillable = ["nombre"];

    public function solicitud(){
    	$this->hasMany('App\Solicitud');
    }
}
