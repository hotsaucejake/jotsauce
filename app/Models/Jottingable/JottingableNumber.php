<?php

namespace App\Models\Jottingable;

use Illuminate\Database\Eloquent\Model;

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
        return $this->morphMany('App\Models\Jotting', 'jottingables');
    }
}
