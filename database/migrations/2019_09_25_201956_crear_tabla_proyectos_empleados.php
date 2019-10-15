<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaProyectosEmpleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos_empleados', function (Blueprint $table) {
            $table->unsignedInteger('Empleados_id');
            $table->foreign('Empleados_id')->references('id')->on('empleados');
            $table->unsignedInteger('Proyectos_id');
            $table->foreign('Proyectos_id')->references('id')->on('proyectos');
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
        Schema::dropIfExists('proyectos_empleados');
    }
}
