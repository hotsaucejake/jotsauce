<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jot extends Model
{
    public function user()
    {
        $this->belongsTo('App\User');
    }
}
