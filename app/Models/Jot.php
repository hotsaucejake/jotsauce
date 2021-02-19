<?php

namespace App\Models;

use App\Scopes\UserScope;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Jot
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string|null $description
 * @property string $slug
 * @property int|null $order_column
 * @property string|null $archived
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\FormElementType[] $formElementTypes
 * @property-read int|null $form_element_types_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Jotting[] $jottings
 * @property-read int|null $jottings_count
 * @method static \Illuminate\Database\Eloquent\Builder|Jot newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Jot newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Jot query()
 * @method static \Illuminate\Database\Eloquent\Builder|Jot whereArchived($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jot whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jot whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jot whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jot whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jot whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jot whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jot whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jot whereUserId($value)
 * @mixin \Eloquent
 */
class Jot extends Model
{
    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope(new UserScope);
    }

    /**
     * ************************************
     * ************************************
     * RELATIONSHIPS.
     * ************************************
     * ************************************
     */
    public function jottings()
    {
        return $this->hasMany(\App\Models\Jotting::class);
    }

    public function user()
    {
        $this->belongsTo(\App\User::class);
    }

    public function formElementTypes()
    {
        return $this->belongsToMany(\App\Models\FormElementType::class, 'form_element_type_jot')
            ->withPivot('id', 'title', 'description', 'order_column', 'created_at', 'updated_at')
            ->orderBy('form_element_type_jot.order_column');
    }
}
