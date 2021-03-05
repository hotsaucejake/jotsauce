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
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\FormElement[] $formElements
 * @property-read int|null $form_elements_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\JotEntry[] $jotEntries
 * @property-read int|null $jot_entries_count
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
    protected $fillable = [
        'title',
        'description',
        'slug',
        'order_column',
        'archived',
    ];

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
    public function jotEntries()
    {
        return $this->hasMany(\App\Models\JotEntry::class);
    }

    public function user()
    {
        $this->belongsTo(\App\User::class);
    }

    public function formElements()
    {
        return $this->belongsToMany(\App\Models\FormElement::class)
            ->using(\App\Models\FormElementJot::class)
            ->withPivot('id', 'title', 'description', 'order_column', 'created_at', 'updated_at')
            ->orderBy('order_column');
    }
}
