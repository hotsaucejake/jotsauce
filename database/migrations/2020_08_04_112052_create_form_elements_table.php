<?php

use App\Models\FormElement;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_elements', function (Blueprint $table) {
            $table->id();
            $table->string('element')->unique();
        });

        Schema::create('form_element_types', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('form_element_id');
            $table->string('type');

            $table->unique(['form_element_id', 'type']);

            $table->foreign('form_element_id')->references('id')->on('form_elements')->onDelete('cascade');
        });

        $input = FormElement::create([
            'element' => 'input',
        ]);

        $input->types()->createMany([
            ['type' => 'button'],
            ['type' => 'checkbox'],
            ['type' => 'color'],
            ['type' => 'date'],
            ['type' => 'datetime-local'],
            ['type' => 'email'],
            ['type' => 'file'],
            ['type' => 'hidden'],
            ['type' => 'image'],
            ['type' => 'month'],
            ['type' => 'number'],
            ['type' => 'password'],
            ['type' => 'radio'],
            ['type' => 'range'],
            ['type' => 'reset'],
            ['type' => 'search'],
            ['type' => 'submit'],
            ['type' => 'tel'],
            ['type' => 'text'],
            ['type' => 'time'],
            ['type' => 'url'],
            ['type' => 'week'],
        ]);

        $label = FormElement::create([
            'element' => 'label',
        ]);

        $select = FormElement::create([
            'element' => 'select',
        ]);

        $select->types()->createMany([
            ['type' => 'option'],
            ['type' => 'optgroup'],
        ]);

        $textarea = FormElement::create([
            'element' => 'textarea',
        ]);

        $button = FormElement::create([
            'element' => 'button',
        ]);

        $button->types()->createMany([
            ['type' => 'button'],
            ['type' => 'reset'],
            ['type' => 'submit'],
        ]);

        $fieldset = FormElement::create([
            'element' => 'fieldset',
        ]);

        $fieldset->types()->create(['type' => 'legend']);

        $datalist = FormElement::create([
            'element' => 'datalist',
        ]);

        $datalist->types()->create(['type' => 'option']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_elements');
    }
}
