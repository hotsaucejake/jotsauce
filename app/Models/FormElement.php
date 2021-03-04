<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\FormElement
 *
 * @property int $id
 * @property string $element
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\FormElementAttribute[] $formElementAttributes
 * @property-read int|null $form_element_attributes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Jot[] $jots
 * @property-read int|null $jots_count
 * @method static \Illuminate\Database\Eloquent\Builder|FormElement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormElement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormElement query()
 * @method static \Illuminate\Database\Eloquent\Builder|FormElement whereElement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormElement whereId($value)
 * @mixin \Eloquent
 */
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

    public function formElementAttributes()
    {
        return $this->hasMany(\App\Models\FormElementAttribute::class);
    }

    public function jots()
    {
        //     return $this->belongsToMany(\App\Models\Jot::class, 'form_element_jot')
        //         ->withPivot('id', 'title', 'description', 'order_column', 'created_at', 'updated_at')
        //         ->orderBy('form_element_type_jot.order_column');

        return $this->belongsToMany(\App\Models\Jot::class)->using(\App\Models\FormElementJot::class);
    }
}
