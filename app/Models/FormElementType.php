<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\FormElementType
 *
 * @property int $id
 * @property int $form_element_id
 * @property string $type
 * @property-read \App\Models\FormElement $formElement
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementType query()
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementType whereFormElementId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementType whereType($value)
 * @mixin \Eloquent
 */
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
