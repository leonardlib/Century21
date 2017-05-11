<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(767);
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTimeTz('fecha');
            $table->integer('fraccionamiento_id')->unsigned();
            $table->integer('vendedor_id')->unsigned();
            $table->integer('cliente_id')->unsigned();
            $table->integer('no_lote');
            $table->char('manzana', 15);
            $table->double('frente');
            $table->double('fondo');
            $table->double('superficie');
            $table->double('precio_metro');
            $table->double('enganche',3,2);
            $table->double('precio_total');
            $table->timestamps();
/*
            
            $table->foreign('fraccionamiento_id')->references('id')->on('fraccionamientos')->onDelete('cascade');
            $table->foreign('vendedor_id')->references('id')->on('vendedores')->onDelete('cascade');
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
  */          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudes');
    }
}
