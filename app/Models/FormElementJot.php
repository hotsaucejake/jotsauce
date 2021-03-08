<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * App\Models\FormElementJot
 *
 * @property int $id
 * @property int $form_element_id
 * @property int $jot_id
 * @property string $title
 * @property string|null $description
 * @property int|null $order_column
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\FormElementAttribute[] $formElementAttributes
 * @property-read int|null $form_element_attributes_count
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementJot newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementJot newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementJot query()
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementJot whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementJot whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementJot whereFormElementId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementJot whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementJot whereJotId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementJot whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementJot whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementJot whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Models\FormElement $formElement
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\FormElementAttributeFormElementJot[] $formElementAttributeFormElementJots
 * @property-read int|null $form_element_attribute_form_element_jots_count
 * @property-read \App\Models\Jot $jot
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Jotting[] $jottings
 * @property-read int|null $jottings_count
 */
class FormElementJot extends Pivot
{
    protected $fillable = [
        'title',
        'description',
        'order_column',
    ];

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    public $timestamps = true;

    /**
     * ************************************
     * ************************************
     * RELATIONSHIPS.
     * ************************************
     * ************************************
     */

    public function jot()
    {
        return $this->belongsTo(\App\Models\Jot::class);
    }

    public function formElement()
    {
        return $this->belongsTo(\App\Models\FormElement::class);
    }

    public function formElementAttributes()
    {
        return $this
            ->belongsToMany(\App\Models\FormElementAttribute::class,
                'form_element_attribute_form_element_jot',
                'form_element_jot_id',
                'form_element_attribute_id')
            ->using(\App\Models\FormElementAttributeFormElementJot::class)
            ->withPivot('id', 'value', 'created_at', 'updated_at');
    }

    public function formElementAttributeFormElementJots()
    {
        return $this->hasMany(\App\Models\FormElementAttributeFormElementJot::class, 'form_element_jot_id', 'id');
    }

    public function jottings()
    {
        return $this->hasMany(\App\Models\Jotting::class, 'form_element_jot_id', 'id');
    }
}
