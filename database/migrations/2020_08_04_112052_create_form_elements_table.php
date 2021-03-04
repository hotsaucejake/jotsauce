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
        // https://developer.mozilla.org/en-US/docs/Web/HTML/Element#forms
        Schema::create('form_elements', function (Blueprint $table) {
            $table->id();
            $table->string('element')->unique();
        });

        Schema::create('form_element_attributes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('form_element_id');
            $table->string('attribute');

            $table->unique(['form_element_id', 'attribute']);

            $table->foreign('form_element_id')->references('id')->on('form_elements')->onDelete('cascade');
        });

        $button   = FormElement::create(['element' => 'button']);
        $datalist = FormElement::create(['element' => 'datalist']);
        $fieldset = FormElement::create(['element' => 'fieldset']);
        $form     = FormElement::create(['element' => 'form']);
        $input    = FormElement::create(['element' => 'input']);
        $label    = FormElement::create(['element' => 'label']);
        $legend   = FormElement::create(['element' => 'legend']);
        $meter    = FormElement::create(['element' => 'meter']);
        $optgroup = FormElement::create(['element' => 'optgroup']);
        $option   = FormElement::create(['element' => 'option']);
        $output   = FormElement::create(['element' => 'output']);
        $progress = FormElement::create(['element' => 'progress']);
        $select   = FormElement::create(['element' => 'select']);
        $textarea = FormElement::create(['element' => 'textarea']);

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
            ['attribute' => 'type'], // submit, reset, button
            ['attribute' => 'value'],
        ]);

        $fieldset->formElementAttributes()->createMany([
            ['attribute' => 'disabled'],
            ['attribute' => 'form'],
            ['attribute' => 'name'],
        ]);

        $form->formElementAttributes()->createMany([
            ['attribute' => 'accept-charset'],
            ['attribute' => 'autocomplete'],
            ['attribute' => 'rel'],
            ['attribute' => 'action'],
            ['attribute' => 'enctype'], // application/x-www-form-urlencoded, multipart/form-data, text/plain
            ['attribute' => 'method'], // post, get, dialog
            ['attribute' => 'novalidate'],
            ['attribute' => 'target'], // _self, _blank, _parent, _top
        ]);

        /**
         * TYPES
         *
         * button, checkbox, color, date, datetime-local, email, file, hidden, image, month, number, password, radio, range, reset, search, submit, tel, text,
         * time, url, week
         */
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

        $label->formElementAttributes()->createMany([
            ['attribute' => 'for'],
        ]);

        $meter->formElementAttributes()->createMany([
            ['attribute' => 'form'],
            ['attribute' => 'high'],
            ['attribute' => 'low'],
            ['attribute' => 'max'],
            ['attribute' => 'min'],
            ['attribute' => 'optimum'],
            ['attribute' => 'value'],
        ]);

        $optgroup->formElementAttributes()->createMany([
            ['attribute' => 'disabled'],
            ['attribute' => 'label'],
        ]);

        $option->formElementAttributes()->createMany([
            ['attribute' => 'disabled'],
            ['attribute' => 'label'],
            ['attribute' => 'selected'],
            ['attribute' => 'value'],
        ]);

        $output->formElementAttributes()->createMany([
            ['attribute' => 'for'],
            ['attribute' => 'form'],
            ['attribute' => 'name'],
        ]);

        $progress->formElementAttributes()->createMany([
            ['attribute' => 'max'],
            ['attribute' => 'value'],
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

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_elements');
        Schema::dropIfExists('form_element_attributes');
    }
}
