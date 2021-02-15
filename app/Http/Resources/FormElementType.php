<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FormElementType extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'           => $this->pivot->id,
            'form_element' => $this->formElement,
            'type'         => $this->type,
            'title'        => $this->pivot->title,
            'description'  => $this->pivot->description,
            'order_column' => $this->pivot->order_column,
            'created_at'   => $this->pivot->created_at,
            'updated_at'   => $this->pivot->updated_at,
        ];
    }
}
