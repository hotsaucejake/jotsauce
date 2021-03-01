<?php

namespace App\Models\Jottingable;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Jottingable\JottingableMediumText
 *
 * @property int $id
 * @property string $value
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Jotting[] $jottings
 * @property-read int|null $jottings_count
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableMediumText newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableMediumText newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableMediumText query()
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableMediumText whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableMediumText whereValue($value)
 * @mixin \Eloquent
 */
class JottingableMediumText extends Model
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
        return $this->morphMany(\App\Models\Jotting::class, 'jottingable');
    }
}
