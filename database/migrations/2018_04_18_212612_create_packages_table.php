<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('clients');
            $table->text('property_type');
            $table->string('house_name');
            $table->text('address_1');
            $table->text('address_2');
            $table->text('address_3');
            $table->string('city');
            $table->string('county');
            $table->string('country');
            $table->string('postcode');
            $table->string('tenancy_type');
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
        Schema::dropIfExists('packages');
    }
}
