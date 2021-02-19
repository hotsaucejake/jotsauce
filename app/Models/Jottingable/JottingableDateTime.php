<?php

namespace App\Models\Jottingable;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Jottingable\JottingableDateTime
 *
 * @property int $id
 * @property string $value
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Jotting[] $jottings
 * @property-read int|null $jottings_count
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableDateTime newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableDateTime newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableDateTime query()
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableDateTime whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableDateTime whereValue($value)
 * @mixin \Eloquent
 */
class JottingableDateTime extends Model
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
