<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            $table->integer('telefono');
            $table->integer('telefono2')->nullable();
            $table->string('email')->nullable();
            $table->integer('dni');
            $table->string('estado_civil');
            $table->date('fecha_ingreso');
            $table->date('fecha_egreso')->nullable();
            $table->string('grupo_sanguineo');
            $table->integer('cuil');
            
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
