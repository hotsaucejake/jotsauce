<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Arr;

class FormElementJot extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $formElementJot = [
            'id'                                       => $this->id,
            'title'                                    => $this->title,
            'description'                              => $this->description,
            'order_column'                             => $this->order_column,
            'created_at'                               => $this->created_at,
            'updated_at'                               => $this->updated_at,
            'form_element'                             => new FormElement($this->formElement), // always return form elements
            'form_element_attribute_form_element_jots' => FormElementAttributeFormElementJot::collection($this->formElementAttributeFormElementJots),
        ];

        if (!$this->whenLoaded('jot')) {
            $formElementJot = Arr::add($formElementJot, 'jot', new Jot($this->jot)); // only load the jot if it's not loaded already - redundant
        }

        return $formElementJot;
    }
}
