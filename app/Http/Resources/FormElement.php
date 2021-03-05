<?php

namespace App\Http\Resources;

use App\Http\Resources\FormElementAttribute;
use App\Http\Resources\FormElementJot;
use Illuminate\Http\Resources\Json\JsonResource;

class FormElement extends JsonResource
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
            'form_element_id'               => $this->id,
            'form_element'                  => $this->element,
            // 'form_element_jot'              => $this->whenPivotLoaded(new \App\Models\FormElementJot, function () {return $this->pivot->toArray();}),
            // 'jot_id'                        => $this->whenPivotLoaded(new \App\Models\FormElementJot, function () {return $this->pivot->jot_id;}),
            'form_element_jot_id'           => $this->whenPivotLoaded(new \App\Models\FormElementJot, function () {return $this->pivot->id;}),
            'form_element_jot_title'        => $this->whenPivotLoaded(new \App\Models\FormElementJot, function () {return $this->pivot->title;}),
            'form_element_jot_description'  => $this->whenPivotLoaded(new \App\Models\FormElementJot, function () {return $this->pivot->description;}),
            'form_element_jot_order_column' => $this->whenPivotLoaded(new \App\Models\FormElementJot, function () {return $this->pivot->order_column;}),
            'form_element_jot_created_at'   => $this->whenPivotLoaded(new \App\Models\FormElementJot, function () {return $this->pivot->created_at;}),
            'form_element_jot_updated_at'   => $this->whenPivotLoaded(new \App\Models\FormElementJot, function () {return $this->pivot->updated_at;}),
            'attributes'                    => $this->whenPivotLoaded(new \App\Models\FormElementJot, function () {
                return FormElementAttribute::collection($this->pivot->formElementAttributes);
            }),
        ];
    }
}
