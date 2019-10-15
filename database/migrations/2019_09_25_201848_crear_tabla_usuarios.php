<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('usuario',50)->unique();
            $table->string('password',50);
            $table->string('ip',18);
            $table->string('Estado',20);
            $table->string('Fecha_Inicio',50);
            $table->string('Fecha_Fin',50);
            $table->unsignedInteger('empleados_id_usuario');
            $table->foreign('empleados_id_usuario')->references('id')->on('empleados');
            
            $table->unsignedInteger('empleados_id_nivel_usuario');
            $table->foreign('empleados_id_nivel_usuario')->references('id')->on('nivel_usuario');
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
        Schema::dropIfExists('usuarios');
    }
}
