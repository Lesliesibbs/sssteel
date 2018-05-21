<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title');
          $table->string('packages_id');
          $table->text('description');
          $table->string('city');
          $table->string('slug');
          $table->SoftDeletes();
          $table->string('country');
          $table->string('duration');
          $table->date('arrival_date');
          $table->date('departure_date');
          $table->string('gallery');
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
        Schema::dropIfExists('holidays');
    }
}
