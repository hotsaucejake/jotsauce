<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Arr;

class FormElementAttributeFormElementJot extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $formElementAttributeFormElementJot = [
            'id'                     => $this->id,
            'value'                  => $this->value,
            'created_at'             => $this->created_at,
            'updated_at'             => $this->updated_at,
            'form_element_attribute' => new FormElementAttribute($this->formElementAttribute),
        ];

        if (!$this->whenLoaded('formElementJot')) {
            $formElementAttributeFormElementJot = Arr::add($formElementAttributeFormElementJot, 'form_element_jot', new FormElementJot($this->formElementJot));
        }

        return $formElementAttributeFormElementJot;
    }
}
