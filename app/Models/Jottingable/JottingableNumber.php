<?php

namespace App\Models\Jottingable;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Jottingable\JottingableNumber
 *
 * @property int $id
 * @property int $value
 * @property int $power_of_ten
 * @property int $positive_value
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Jotting[] $jottings
 * @property-read int|null $jottings_count
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableNumber newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableNumber newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableNumber query()
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableNumber whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableNumber wherePositiveValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableNumber wherePowerOfTen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableNumber whereValue($value)
 * @mixin \Eloquent
 */
class JottingableNumber extends Model
{
    protected $fillable = [
        'value',
        'power_of_ten',
        'positive_value',
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
