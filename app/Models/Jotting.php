<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Jotting
 *
 * @property int $id
 * @property int $jot_entry_id
 * @property int $form_element_jot_id
 * @property string $jottingable_type
 * @property int $jottingable_id
 * @property-read \App\Models\FormElementJot $formElementJot
 * @property-read \App\Models\JotEntry $jotEntry
 * @property-read Model|\Eloquent $jottingable
 * @method static \Illuminate\Database\Eloquent\Builder|Jotting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Jotting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Jotting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Jotting whereFormElementJotId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jotting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jotting whereJotEntryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jotting whereJottingableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jotting whereJottingableType($value)
 * @mixin \Eloquent
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

    public function formElementJot()
    {
        return $this->belongsTo(\App\Models\FormElementJot::class);
    }

    /**
     * Get the parent jottingable model
     */
    public function jottingable()
    {
        return $this->morphTo();
    }
}
