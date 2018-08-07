<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermisosObrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisos_obras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_permiso');
            $table->string('descripcion');
            $table->integer('id_obra')->unsigned();
            $table->foreign('id_obra')->references('id')->on('obras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permisos_obras');
    }
}
