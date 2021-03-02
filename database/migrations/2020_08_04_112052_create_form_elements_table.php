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

        Schema::create('form_element_attributes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('form_element_id');
            $table->string('attribute');

            $table->unique(['form_element_id', 'attribute']);

            $table->foreign('form_element_id')->references('id')->on('form_elements')->onDelete('cascade');
        });

        $input = FormElement::create([
            'element' => 'input',
        ]);

        $input->formElementTypes()->createMany([
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

        $input->formElementAttributes()->createMany([
            ['attribute' => 'accept'], // type = file
            ['attribute' => 'alt'], // type = image
            ['attribute' => 'autocomplete'], // type = all
            ['attribute' => 'autofocus'], // type = all
            ['attribute' => 'capture'], // type = file
            ['attribute' => 'checked'], // type = radio, checkbox
            ['attribute' => 'dirname'], // type = text, search
            ['attribute' => 'disabled'], // type = all
            ['attribute' => 'form'], // type = all
            ['attribute' => 'formaction'], // type = image, submit
            ['attribute' => 'formenctype'], // type = image, submit
            ['attribute' => 'formmethod'], // type = image, submit
            ['attribute' => 'formnovalidate'], // type = image, submit
            ['attribute' => 'formtarget'], // type = image, submit
            ['attribute' => 'height'], // type = image
            ['attribute' => 'list'], // type = color, date, datetime-local, email, month, number, range, search, tel, text, time, url, week
            ['attribute' => 'max'], // type = date, datetime-local, month, number, range time, week
            ['attribute' => 'maxlength'], // type = password, search, tel, text, url
            ['attribute' => 'min'], // type = date, datetime-local, month, number, range time, week
            ['attribute' => 'minlength'], // type = password, search, tel, text, url
            ['attribute' => 'multiple'], // type = email, file
            ['attribute' => 'name'], // type = all
            ['attribute' => 'pattern'], // type = password, tel, text
            ['attribute' => 'placeholder'], // type = password, search, tel, text, url
            ['attribute' => 'readonly'], // type = date, datetime-local, email, month, number, password, search, tel, text, time, url, week
            ['attribute' => 'required'], // type = checkbox, date, datetime-local, email, file, month, number, password, radio, search, tel, text, time, url, week
            ['attribute' => 'size'], // type = email, password, tel, text
            ['attribute' => 'src'], // type = image
            ['attribute' => 'step'], // type = date, datetime-local, month, number, range time, week
            ['attribute' => 'type'], // type = all
            ['attribute' => 'value'], // type = all
            ['attribute' => 'width'], // type = image
        ]);

        $label = FormElement::create([
            'element' => 'label',
        ]);

        $label->formElementAttributes()->createMany([
            ['attribute' => 'for'],
        ]);

        $select = FormElement::create([
            'element' => 'select',
        ]);

        $select->formElementTypes()->createMany([
            ['type' => 'option'],
            ['type' => 'optgroup'],
        ]);

        $select->formElementAttributes()->createMany([
            ['attribute' => 'autocomplete'],
            ['attribute' => 'autofocus'],
            ['attribute' => 'disabled'],
            ['attribute' => 'form'],
            ['attribute' => 'multiple'],
            ['attribute' => 'name'],
            ['attribute' => 'required'],
            ['attribute' => 'size'],
        ]);

        $textarea = FormElement::create([
            'element' => 'textarea',
        ]);

        $textarea->formElementAttributes()->createMany([
            ['attribute' => 'autocomplete'],
            ['attribute' => 'autofocus'],
            ['attribute' => 'cols'],
            ['attribute' => 'disabled'],
            ['attribute' => 'form'],
            ['attribute' => 'maxlength'],
            ['attribute' => 'minlength'],
            ['attribute' => 'name'],
            ['attribute' => 'placeholder'],
            ['attribute' => 'readonly'],
            ['attribute' => 'required'],
            ['attribute' => 'rows'],
            ['attribute' => 'spellcheck'],
            ['attribute' => 'wrap'],
        ]);

        $button = FormElement::create([
            'element' => 'button',
        ]);

        $button->formElementTypes()->createMany([
            ['type' => 'button'],
            ['type' => 'reset'],
            ['type' => 'submit'],
        ]);

        $button->formElementAttributes()->createMany([
            ['attribute' => 'autofocus'],
            ['attribute' => 'disabled'],
            ['attribute' => 'form'],
            ['attribute' => 'formaction'],
            ['attribute' => 'formenctype'],
            ['attribute' => 'formmethod'],
            ['attribute' => 'formnovalidate'],
            ['attribute' => 'formtarget'],
            ['attribute' => 'name'],
            ['attribute' => 'type'],
            ['attribute' => 'value'],
        ]);

        $fieldset = FormElement::create([
            'element' => 'fieldset',
        ]);

        $fieldset->formElementTypes()->create(['type' => 'legend']);

        $fieldset->formElementAttributes()->createMany([
            ['attribute' => 'disabled'],
            ['attribute' => 'form'],
            ['attribute' => 'name'],
        ]);

        $datalist = FormElement::create([
            'element' => 'datalist',
        ]);

        $datalist->formElementTypes()->create(['type' => 'option']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_elements');
        Schema::dropIfExists('form_element_types');
        Schema::dropIfExists('form_element_attributes');
    }
}
