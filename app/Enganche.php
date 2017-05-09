<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enganche extends Model
{
    protected $table = "enganches";

    protected $fillable = ["solicitud_id","saldo_enganche"];
   
}
