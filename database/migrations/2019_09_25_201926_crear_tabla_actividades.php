<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaActividades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->Increments('id');
            $table->String('nombre_actividad',50);
            $table->String('fecha_inicio_act',50);
            $table->String('fecha_fin_act',50);
            $table->String('estatus_act',50);
            $table->String('descripcion_act',50);
            $table->String('apoyo',50);
            $table->unsignedInteger('proyectos_id_actividad');
            $table->foreign('proyectos_id_actividad')->references('id')->on('proyectos');
            $table->timestamps();
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
        Schema::dropIfExists('actividades');
    }
}
