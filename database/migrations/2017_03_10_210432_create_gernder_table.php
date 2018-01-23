<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGernderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gender', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description', 75);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('person', function (Blueprint $table) {
          $table->foreign('gender_id')->references('id')->on('gender')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gender');
    }
}
