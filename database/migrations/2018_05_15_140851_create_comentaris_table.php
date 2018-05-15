<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentaris', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuari')->unsigned();
            $table->foreign('id_usuari')->references('id')->on('users');
            $table->integer('id_historia')->unsigned();
            $table->foreign('id_historia')->references('id')->on('histories');
            $table->timestamps();
            $table->integer('nVots');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentaris');
    }
}
