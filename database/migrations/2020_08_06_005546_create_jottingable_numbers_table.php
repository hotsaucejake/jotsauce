<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJottingableNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jottingable_numbers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('value');
            $table->integer('power_of_ten')->default(0); // 0 will the be value, otherwise, this is **'decimal places'
            $table->boolean('positive_value')->default(true);

            // no timestamps because that's tracked by the jotting
            // **'decimal places'
            // 10^-2 is 2 decimal places
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jottingable_numbers');
    }
}
