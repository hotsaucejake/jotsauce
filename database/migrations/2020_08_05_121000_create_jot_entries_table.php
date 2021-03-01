<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJotEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jot_entries', function (Blueprint $table) {
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
