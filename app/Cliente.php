<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

	protected $table = "clientes";

	protected $fillable = ["nombre","calle","colonia","telefono","ife","saldo"];
}
