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
<<<<<<< HEAD
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
=======
          $table->increments('id');
          $table->string('name');
          $table->string('email')->unique();
          $table->string('username')->unique();
          $table->string('password');
          $table->string('activation_code')->nullable();
          $table->boolean('status')->default(0);
          $table->rememberToken();
          $table->timestamps();
>>>>>>> 478011d04d67bb0cfff8def9f1c943eacadae3b1
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
