<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = "solicitudes";

	protected $fillable = ["fecha","fraccionamiento_id","nombre","vendedor_id","no_lote","manzana","frente","fondo","superficie","precio_metro","enganche","precio_total"];
}
