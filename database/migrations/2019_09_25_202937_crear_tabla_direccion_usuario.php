<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaDireccionUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccion_usuario', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('direccion_correo',80);
            $table->Integer('telf_emp');
            $table->Integer('telf_emp_seg');
            $table->string('direccion_correo_seg',80);
            $table->unsignedInteger('direccion_id');
            $table->foreign('direccion_id')->references('id')->on('empleados');
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
        Schema::dropIfExists('direccion_usuario');
    }
}
