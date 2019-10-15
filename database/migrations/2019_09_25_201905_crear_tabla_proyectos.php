<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaProyectos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->Increments('id');
            $table->String('nombre_proyecto',50)->unique();
            $table->String('fecha_inicio',20);
            $table->String('fecha_fin',20);
            $table->String('estatus',20);
            $table->String('descripcion',120);
            $table->unsignedInteger('proyectos_id_lenguajes');
            $table->foreign('proyectos_id_lenguajes')->references('id')->on('lenguajes');
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
        Schema::dropIfExists('proyectos');
    }
}
