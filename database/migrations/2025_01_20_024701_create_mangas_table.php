<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMangasTable extends Migration
{
    public function up()
    {
        Schema::create('mangas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('autor');
            $table->text('descripcion');
            $table->string('genero');
            $table->integer('numero_de_tomos');
            $table->date('fecha_lanzamiento');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mangas');
    }
}
