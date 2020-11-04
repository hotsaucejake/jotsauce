<?php

namespace App\Models\Jottingable;

use Illuminate\Database\Eloquent\Model;

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
