<?php

namespace App\Http\Resources;

use App\Http\Resources\FormElementType;
use App\Http\Resources\Jottingable;
use Illuminate\Http\Resources\Json\JsonResource;

class Jotting extends JsonResource
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
            'id'           => $this->id,
            'form_element' => new FormElementType($this->formElementType),
            'jottingable'  => new Jottingable($this->whenLoaded('jottingable')),
        ];
    }
}
