<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormElementTypeJotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_element_jot', function (Blueprint $table) {
            $table->id(); // we actually need an id because we'll reference it with a jottingable
            $table->unsignedBigInteger('form_element_id');
            $table->unsignedBigInteger('jot_id');

            $table->string('title');
            $table->text('description')->nullable();

            $table->integer('order_column')->nullable(); // user preference for order
            $table->timestamps();

            $table->foreign('form_element_id')
                ->references('id')
                ->on('form_elements')
                ->onDelete('restrict'); // you cannot delete a form_element, sorry
            $table->foreign('jot_id')
                ->references('id')
                ->on('jots')
                ->onDelete('cascade'); // you can delete a jot
        });

        Schema::create('form_element_attribute_form_element_jot', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('form_element_attribute_id');
            $table->unsignedBigInteger('form_element_jot_id');

            $table->string('value');

            $table->timestamps();

            $table->foreign('form_element_jot_id', 'form_element_jot_attribute_jot_foreign')
                ->references('id')
                ->on('form_element_jot')
                ->onDelete('cascade');
            $table->foreign('form_element_attribute_id', 'form_element_jot_attribute_attribute_foreign')
                ->references('id')
                ->on('form_element_attributes')
                ->onDelete('restrict'); // you can't delete a form_element_attribute
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_element_jot');
        Schema::dropIfExists('form_element_attribute_form_element_jot');
    }
}
