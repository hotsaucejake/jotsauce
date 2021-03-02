<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\FormElement
 *
 * @property int $id
 * @property string $element
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\FormElementType[] $formElementTypes
 * @property-read int|null $form_element_types_count
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

    public function formElementTypes()
    {
        return $this->hasMany(\App\Models\FormElementType::class);
    }

    public function formElementAttributes()
    {
        return $this->hasMany(\App\Models\FormElementAttribute::class);
    }
}
