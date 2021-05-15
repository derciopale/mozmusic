<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musicas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('artista');
            $table->string('titulo');
            $table->string('genero');
            $table->double('preco' , 15, 8);
            $table->string('audio');
            $table->date('ano');
            $table->string('foto');


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
        Schema::dropIfExists('musicas');
    }
}
