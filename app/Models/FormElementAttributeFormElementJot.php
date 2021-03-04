<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * App\Models\FormElementAttributeFormElementJot
 *
 * @property int $id
 * @property int $form_element_attribute_id
 * @property int $form_element_jot_id
 * @property string $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementAttributeFormElementJot newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementAttributeFormElementJot newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementAttributeFormElementJot query()
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementAttributeFormElementJot whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementAttributeFormElementJot whereFormElementAttributeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementAttributeFormElementJot whereFormElementJotId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementAttributeFormElementJot whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementAttributeFormElementJot whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormElementAttributeFormElementJot whereValue($value)
 * @mixin \Eloquent
 */
class FormElementAttributeFormElementJot extends Pivot
{
    protected $fillable = [
        'value',
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

    public function formElementJot()
    {
        $this->belongsTo(\App\Models\FormElementJot::class, 'form_element_jot_id');
    }

    public function formElementAttribute()
    {
        $this->belongsTo(\App\Models\FormElementAttribute::class, 'form_element_attribute_id');
    }
}
