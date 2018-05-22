<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
    {
        Schema::create('noticies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titol');
            $table->text('noticia');
            $table->string('usuari',100);
            $table->foreign('usuari',100)->references('name')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }
//Fer un camp nou que es digui data i fer servir el carbon

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticies');
    }
}
