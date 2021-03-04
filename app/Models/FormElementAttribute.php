<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\FormElementAttribute
 *
 * @property int $id
 * @property int $form_element_id
 * @property string $attribute
 * @property-read \App\Models\FormElement $formElement
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\FormElementJot[] $formElementJots
 * @property-read int|null $form_element_jots_count
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementAttribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementAttribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementAttribute query()
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementAttribute whereAttribute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementAttribute whereFormElementId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementAttribute whereId($value)
 * @mixin \Eloquent
 */
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

    public function formElementJots()
    {
        //     return $this->belongsToMany(\App\Models\FormElementJot::class, 'form_element_attribute_form_element_jot')
        //         ->withPivot('id', 'value', 'created_at', 'updated_at');

        return $this
            ->belongsToMany(\App\Models\FormElementJot::class, 'form_element_attribute_form_element_jot', 'form_element_attribute_id', 'form_element_jot_id')
            ->using(\App\Models\FormElementAttributeFormElementJot::class);
    }
}
