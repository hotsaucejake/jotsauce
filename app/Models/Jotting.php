<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Jotting
 *
 * @property int $id
 * @property int $jot_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Jotting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Jotting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Jotting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Jotting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jotting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jotting whereJotId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jotting whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $jot_entry_id
 * @property int $form_element_type_id
 * @property string $jottingable_type
 * @property int $jottingable_id
 * @property-read \App\Models\FormElementType $formElementType
 * @property-read \App\Models\JotEntry $jotEntry
 * @property-read Model|\Eloquent $jottingable
 * @method static \Illuminate\Database\Eloquent\Builder|Jotting whereFormElementTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jotting whereJotEntryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jotting whereJottingableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jotting whereJottingableType($value)
 */
class Jotting extends Model
{
    /**
     * ************************************
     * ************************************
     * RELATIONSHIPS.
     * ************************************
     * ************************************
     */

    public function jotEntry()
    {
        return $this->belongsTo(\App\Models\JotEntry::class);
    }

    public function formElementType()
    {
        return $this->belongsTo(\App\Models\FormElementType::class);
    }

    /**
     * Get the parent jottingable model
     */
    public function jottingable()
    {
        return $this->morphTo();
    }
}
