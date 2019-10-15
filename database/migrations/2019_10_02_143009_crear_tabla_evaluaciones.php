<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaEvaluaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluaciones', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('Pregunta',150);
            $table->boolean('Respuesta');
            $table->date('InicioEval');
            $table->date('FinEval');
            $table->unsignedInteger('Lenguaje_id');
            $table->foreign('Lenguaje_id')->references('id')->on('lenguajes');
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
        Schema::dropIfExists('evaluaciones');
    }
}
