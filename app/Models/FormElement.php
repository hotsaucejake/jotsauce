<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormElement extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'element',
    ];

    
    public $timestamps = false;


    public function types()
    {
        return $this->hasMany('App\Models\FormElementType');
    }
}
