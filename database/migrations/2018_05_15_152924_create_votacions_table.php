<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votacions', function (Blueprint $table) {
            $table->integer('id_historia')->unsigned();
            $table->foreign('id_historia')->references('id')->on('histories');
            $table->integer('id_usuari')->unsigned();
            $table->foreign('id_usuari')->references('id')->on('users');
            $table->primary(['id_historia','id_usuari']);
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
        Schema::dropIfExists('votacions');
    }
}
