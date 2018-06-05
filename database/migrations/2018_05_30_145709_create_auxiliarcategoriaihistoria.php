<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuxiliarcategoriaihistoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('categoriahistoria', function (Blueprint $table) {
            $table->integer('id_historia')->unsigned();
            $table->foreign('id_historia')->references('id')->on('histories')->onDelete('cascade');
            $table->integer('id_categories')->unsigned();
            $table->foreign('id_categories')->references('id')->on('categories')->onDelete('cascade');
            $table->primary(['id_historia','id_categories']);
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
        //
    }
}
