<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJottingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // whenever a new entry is made for a a jot
        Schema::create('jottings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jot_entry_id');

            $table->unsignedBigInteger('form_element_jot_id');

            $table->morphs('jottingable'); // jottingable_type jottingable_id (integer, datetime, etc...)
            // $table->timestamps(); // we can get timestamps from the jot_entry (touch the parent)

            $table->foreign('jot_entry_id')->references('id')->on('jot_entries')->onDelete('cascade');
            $table->foreign('form_element_jot_id')->references('id')->on('form_element_jot')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jottings');
    }
}
