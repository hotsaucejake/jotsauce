<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jots', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('slug');
            $table->integer('order_column')->nullable();
            $table->timestamps();

            $table->unique(['user_id', 'slug']);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Schema::create('jottables', function (Blueprint $table) {
        //     $table->bigInteger('jot_id')->unsigned();
        //     $table->morphs('jottables');
        //     $table->string('title');
        //     $table->text('description')->nullable();
        //     $table->integer('order_column')->nullable();
        //     $table->timestamps();

        //     $table->foreign('jot_id')->references('id')->on('jots')->onDelete('cascade');
        // });

        // Schema::create('form_elements', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('element'); // input?, select?, textarea?, datalist?, output?, option?, optgroup?
        //     $table->string('type');  // checkbox, 
        //     // $table->text('description')->nullable();
        //     $table->
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jots');
    }
}
