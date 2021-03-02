<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormElementAttribute extends Model
{
    protected $fillable = [
        'attribute',
    ];

    public $timestamps = false;

    /**
     * ************************************
     * ************************************
     * RELATIONSHIPS.
     * ************************************
     * ************************************
     */

    public function formElement()
    {
        return $this->belongsTo(\App\Models\FormElement::class, 'form_element_id');
    }
}
