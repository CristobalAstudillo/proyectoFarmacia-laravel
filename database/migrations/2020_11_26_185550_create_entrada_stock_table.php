<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradaStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrada_stock', function (Blueprint $table) {
            $table->increments('id')->primary();
            $table->char('codProducto', 20);
            $table->char('rutProveedor', 20);
            $table->integer('cantRecibidas');
            $table->date('fechaRecepcion');
            $table->date('fechaVencimiento');
            $table->date('fechaRecepcion');
            $table->integer('idUsuario');
            $table->dateTime('fechacreacion');
            $table->foreign('idUsuario')->references('id')->on('usuario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrada_stock');
    }
}