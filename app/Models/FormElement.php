<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormElement extends Model
{
    protected $fillable = [
        'element',
    ];

    public $timestamps = false;

    /**
     * ************************************
     * ************************************
     * RELATIONSHIPS.
     * ************************************
     * ************************************
     */
    public function formElementTypes()
    {
        return $this->hasMany(\App\Models\FormElementType::class);
    }
}
