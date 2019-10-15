<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaResultadoEvaluaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultado_evaluaciones', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('Puntaje');
            $table->unsignedInteger('Empleados_id');
            $table->foreign('Empleados_id')->references('id')->on('empleados');
            $table->unsignedInteger('Evaluacion_id');
            $table->foreign('Evaluacion_id')->references('id')->on('evaluaciones');
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultado_evaluaciones');
    }
}
