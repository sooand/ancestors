<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personRelation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('relationType_refType', 20)->index();
            $table->foreign('relationType_refType')->references('refType')->on('relationType')->onDelete('no action');
            $table->integer('from_person_id')->index()->unsigned();
            $table->foreign('from_person_id')->references('id')->on('person')->onDelete('no action');
            $table->integer('to_person_id')->index()->unsigned();
            $table->foreign('to_person_id')->references('id')->on('person')->onDelete('no action');
            $table->dateTime('valid_from')->nullable();
            $table->dateTime('valid_to')->nullable();
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
        Schema::dropIfExists('personRelation');
    }
}
