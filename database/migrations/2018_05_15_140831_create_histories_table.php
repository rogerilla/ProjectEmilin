<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('usuari',100);
            $table->foreign('usuari',100)->references('name')->on('users')->onDelete('cascade');
            $table->string('titol',100)->unique();
            $table->integer('id_categoria')->unsigned();
            $table->foreign('id_categoria')->references('id')->on('categories');
            $table->text('resum');
            $table->text('contingut');
            $table->timestamps();
            $table->boolean('finalitzacio');
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
        Schema::dropIfExists('histories');
    }
}
