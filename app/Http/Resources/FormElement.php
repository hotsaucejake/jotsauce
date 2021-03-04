<?php

namespace App\Http\Resources;

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
        return parent::toArray($request);
        // return [
        // get attributes when loaded
        //     'id' => $this->formElement->id,
        //     'form_element'    => $this->element,
        //     'type_id'         => $this->id,
        //     'type'            => $this->type,
        //     'jot_type_id'     => $this->whenPivotLoaded('form_element_type_jot', function () {return $this->pivot->id;}),
        //     'title'           => $this->whenPivotLoaded('form_element_type_jot', function () {return $this->pivot->title;}),
        //     'description'     => $this->whenPivotLoaded('form_element_type_jot', function () {return $this->pivot->description;}),
        //     'order_column'    => $this->whenPivotLoaded('form_element_type_jot', function () {return $this->pivot->order_column;}),
        //     'created_at'      => $this->whenPivotLoaded('form_element_type_jot', function () {return $this->pivot->created_at;}),
        //     'updated_at'      => $this->whenPivotLoaded('form_element_type_jot', function () {return $this->pivot->updated_at;}),
        // ];
    }
}
