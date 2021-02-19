<?php

namespace App\Models\Jottingable;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Jottingable\JottingableBoolean
 *
 * @property int $id
 * @property int $value
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Jotting[] $jottings
 * @property-read int|null $jottings_count
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableBoolean newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableBoolean newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableBoolean query()
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableBoolean whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableBoolean whereValue($value)
 * @mixin \Eloquent
 */
class JottingableBoolean extends Model
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
