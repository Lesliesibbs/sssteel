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
          $table->integer('user_id');
          $table->string('title');
          $table->string('package_type');
          $table->text('desc_small');
          $table->string('name');
          $table->text('description');
          $table->string('location');
          $table->string('duration');
          $table->date('arrival_date');
          $table->date('departure_date');
          $table->string('about_tour');
          $table->string('detail_schedule');
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
