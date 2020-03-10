<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->bigIncrements('idEstado');

            $table->unsignedBigInteger('idUsuarioColaborador');
            $table->foreign('idUsuarioColaborador')->references('id')->on('users');

            $table->unsignedBigInteger('idUsuarioVerificador');
            $table->foreign('idUsuarioVerificador')->references('id')->on('users');

            $table->unsignedBigInteger('idPedido');
            $table->foreign('idPedido')->references('idPedido')->on('pedidos');


            $table->enum('califiacion',['Inicio','Proceso','Despacho','Entretegado'])->nullable();
            $table->dateTime('fechaInicio')->nullable();
            $table->dateTime('fechaProceso')->nullable();
            $table->dateTime('fechaDespacho')->nullable();
            $table->dateTime('fechaEntregado')->nullable();
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
        Schema::dropIfExists('estados');
    }
}
