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
            $table->unsignedBigInteger('jot_id');
            $table->timestamps();

            $table->foreign('jot_id')->references('id')->on('jots')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jot_entries');
    }
}
