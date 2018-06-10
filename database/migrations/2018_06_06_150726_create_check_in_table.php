<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckInTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_in', function (Blueprint $table) {
          $table->increments('id');
          $table->string('packages_id');
          $table->date('date');
          $table->date('check_in_date');
          $table->text('gas_reading');
          $table->text('certificates');
          $table->string('electric_reading');
          $table->string('smake_detector');
          $table->string('manuals');
          $table->string('keys');
          $table->string('property_clean');
          $table->string('carpets_clean');
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
        Schema::dropIfExists('check_in');
    }
}
