<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormElementType extends Model
{
    protected $fillable = [
        'type',
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
