<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Arr;

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
        $formElementAttribute = [
            'id'        => $this->id,
            'attribute' => $this->attribute,
        ];

        if (!$this->whenLoaded('formElement')) {
            $formElementAttribute = Arr::add($formElementAttribute, 'form_element', new FormElement($this->formElement));
        }

        return $formElementAttribute;
    }
}
