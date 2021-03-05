<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FormElementAttribute extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'attribute_id'                               => $this->id,
            'attribute'                                  => $this->attribute,
            'value'                                      => $this->whenPivotLoaded(new \App\Models\FormElementAttributeFormElementJot(), function () {return $this->pivot->value;}),
            'form_element_attribute_form_element_jot_id' => $this->whenPivotLoaded(new \App\Models\FormElementAttributeFormElementJot(), function () {return $this->pivot->id;}),
            'created_at'                                 => $this->whenPivotLoaded(new \App\Models\FormElementAttributeFormElementJot(), function () {return $this->pivot->created_at;}),
            'updated_at'                                 => $this->whenPivotLoaded(new \App\Models\FormElementAttributeFormElementJot(), function () {return $this->pivot->updated_at;}),
            // 'form_element_attribute_form_element_jot'    => $this->whenPivotLoaded(new \App\Models\FormElementAttributeFormElementJot(), function () {return $this->pivot->toArray();}),
        ];
    }
}
