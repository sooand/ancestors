<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('translation', function (Blueprint $table) {
            $table->index(['tableRef', 'idRef', 'language_code']);
            $table->unique(['tableRef', 'idRef', 'language_code']);
            $table->increments('id');
            $table->string('tableRef', 30);
            $table->integer('idRef');
            $table->string('language_code', 4);
            $table->foreign('language_code')->references('code')->on('language')->onDelete('no action');
            $table->string('description', 75);
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
        Schema::dropIfExists('translation');
    }
}
