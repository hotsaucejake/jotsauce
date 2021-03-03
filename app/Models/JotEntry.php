<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\JotEntry
 *
 * @property int $id
 * @property int $jot_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Jot $jot
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Jotting[] $jottings
 * @property-read int|null $jottings_count
 * @method static \Illuminate\Database\Eloquent\Builder|JotEntry newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JotEntry newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JotEntry query()
 * @method static \Illuminate\Database\Eloquent\Builder|JotEntry whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JotEntry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JotEntry whereJotId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JotEntry whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class JotEntry extends Model
{
    use HasFactory;

    /**
     * ************************************
     * ************************************
     * RELATIONSHIPS.
     * ************************************
     * ************************************
     */

    public function jot()
    {
        return $this->belongsTo(\App\Models\Jot::class);
    }

    public function jottings()
    {
        return $this->hasMany(\App\Models\Jotting::class);
    }
}
