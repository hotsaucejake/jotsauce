<?php

namespace App\Models\Jottingable;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Jottingable\JottingableText
 *
 * @property int $id
 * @property string $value
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Jotting[] $jottings
 * @property-read int|null $jottings_count
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableText newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableText newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableText query()
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableText whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JottingableText whereValue($value)
 * @mixin \Eloquent
 */
class JottingableText extends Model
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
