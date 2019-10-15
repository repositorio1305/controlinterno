<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaEstadoEvaluacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado_evaluacion', function (Blueprint $table) {
            $table->Increments('id');
            $table->String('Estado',45);
            $table->String('Nivel_Sugerido',45);
            $table->unsignedInteger('Resultado_Eva_id');
            $table->foreign('Resultado_Eva_id')->references('id')->on('resultado_evaluaciones');
            $table->unsignedInteger('Nivel_Actual_id');
            $table->foreign('Nivel_Actual_id')->references('id')->on('cargos');
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
        Schema::dropIfExists('estado_evaluacion');
    }
}
