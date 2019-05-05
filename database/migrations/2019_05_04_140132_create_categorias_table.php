<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');

            $table ->string('nombre',50);
            $table ->string('telefono',15);
            $table ->string('correo',30);
            $table ->string('edad',10);
            $table ->string('sexo',10);
            $table ->string('estatura',10);
            $table ->string('peso',10);
            $table ->string('medicamento',20);
            $table ->string('dosis',15);
            $table ->string('efecto_adverso',20);
            $table ->string('comentarios',50);
            $table->boolean('condicion')->default(1);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
