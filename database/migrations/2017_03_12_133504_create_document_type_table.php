<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentType', function (Blueprint $table) {
            $table->string('id', 20)->primary();
            $table->string('description', 75);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('document', function (Blueprint $table) {
            $table->foreign('documentType_id')->references('id')->on('documentType')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentType');
    }
}
