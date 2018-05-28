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
            $table->integer('usuari')->unsigned();
            $table->foreign('usuari')->references('id')->on('users')->onDelete('cascade');
            $table->string('titol',100)->unique();
            $table->integer('id_categoria')->unsigned();
            $table->foreign('id_categoria')->references('id')->on('categories');
            $table->text('resum');
            $table->text('contingut');
            $table->timestamps();
            $table->boolean('finalitzacio');
            $table->integer('nVots')->default(0);
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
