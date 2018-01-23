<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personHistory', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('person_id')->unsigned();
            $table->foreign('person_id')->references('id')->on('person')->onDelete('no action');
            $table->date('fromDate');
            $table->date('toDate');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('familyName');
            $table->string('bornFamilyName');
            $table->integer('gender_id')->unsigned();
            $table->foreign('gender_id')->references('id')->on('gender')->onDelete('no action');
            $table->text('description');
            $table->string('title', 75);
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
        Schema::dropIfExists('personHistory');
    }
}
