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
    public function element()
    {
        return $this->belongsTo(\App\Models\FormElement::class);
    }
}
