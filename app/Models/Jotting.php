<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jotting extends Model
{
    /**
     * ************************************
     * ************************************
     * RELATIONSHIPS.
     * ************************************
     * ************************************
     */
    public function jot()
    {
        $this->belongsTo('App\Models\Jot');
    }

    // user hasonethrough
}
