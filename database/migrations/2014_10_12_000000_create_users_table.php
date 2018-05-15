<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
=======
            $table->string('name',100)->unique();
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->integer('edat')->unsigned();
            $table->integer('nComentaris')->unsigned();
            $table->string('categora');
            $table->rememberToken();
            $table->timestamps();
            $table->date('last_login');
>>>>>>> 0ddec4fba99bfa51b064081e64d73b540546e052
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
