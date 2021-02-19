<?php

namespace App\Models\Jottingable;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Jottingable\JottingableString
 *
 * @property int $id
 * @property string $value
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Jotting[] $jottings
 * @property-read int|null $jottings_count
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableString newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableString newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableString query()
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableString whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableString whereValue($value)
 * @mixin \Eloquent
 */
class JottingableString extends Model
{
    protected $fillable = [
        'value',
    ];

    public $timestamps = false;

    /**
     * ************************************
     * ************************************
     * RELATIONSHIPS.
     * ************************************
     * ************************************
     */
    public function jottings()
    {
        return $this->morphMany(\App\Models\Jotting::class, 'jottingables');
    }
}
