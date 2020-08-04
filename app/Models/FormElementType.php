<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormElementType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
    ];
    

    public $timestamps = false;


    public function element()
    {
        return $this->belongsTo('App\Models\FormElement');
    }
}
