<?php

namespace App\Models;

use App\Scopes\UserScope;
use Illuminate\Database\Eloquent\Model;

class Jot extends Model
{
    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope(new UserScope);
    }

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

    public function formElementTypes()
    {
        return $this->belongsToMany(\App\Models\FormElementType::class, 'form_element_type_jot')
            ->withPivot('title', 'description', 'order_column', 'created_at', 'updated_at')
            ->orderBy('form_element_type_jot.order_column');
    }
}
