<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person', function (Blueprint $table) {
          $table->increments('id');
          $table->dateTime('birthDateTime')->nullable();
          $table->dateTime('deathDateTime')->nullable();
          $table->string('firstName');
          $table->string('middleName')->nullable();
          $table->string('familyName');
          $table->string('bornFamilyName')->nullable();
          $table->integer('gender_id')->unsigned();
          $table->timestamps();
          $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person');
    }
}
