<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
