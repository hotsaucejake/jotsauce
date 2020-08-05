<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJottingablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jottingables', function (Blueprint $table) {
            $table->unsignedBigInteger('jotting_id'); // entry id, from this relationship we know when it was created and the jot
            $table->unsignedBigInteger('form_element_type_jot_id'); // reference to the data type, jot form type id

            $table->morphs('jottingables'); // jottingable_type jottingable_id (integer, datetime, etc...)

            $table->foreign('jotting_id')->references('id')->on('jottings')->onDelete('cascade');
            $table->foreign('form_element_type_jot_id')->references('id')->on('form_element_type_jot')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jottables');
    }
}
