<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaEmpleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombre_emp',50);
            $table->string('apellido_emp',50);
            $table->string('ci_emp',18)->unique();
            $table->string('nombre_s',50);
            $table->string('apellido_s',50);
            $table->unsignedInteger('empleados_id_cargos');
            $table->foreign('empleados_id_cargos')->references('id')->on('cargos');
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
        Schema::dropIfExists('empleados');
    }
}
