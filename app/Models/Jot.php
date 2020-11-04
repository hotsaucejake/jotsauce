<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jot extends Model
{
    /**
     * ************************************
     * ************************************
     * RELATIONSHIPS.
     * ************************************
     * ************************************
     */
    public function jottings()
    {
        return $this->hasMany(\App\Models\Jotting::class);
    }

    public function user()
    {
        $this->belongsTo(\App\User::class);
    }
}
