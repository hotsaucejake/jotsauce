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
            $table->string('slug'); // use slugs in the future
            $table->integer('order_column')->nullable();
            $table->dateTime('archived')->nullable(); // instead of deleting all the data
            $table->timestamps();

            $table->unique(['user_id', 'slug']); // only 1 slug per user

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
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
