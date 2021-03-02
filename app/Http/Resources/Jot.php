<?php

namespace App\Http\Resources;

use App\Http\Resources\FormElementType;
use App\Http\Resources\JotEntry;
use Illuminate\Http\Resources\Json\JsonResource;

class Jot extends JsonResource
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
            'id'                 => $this->id,
            // 'user_id'            => $this->user_id, // removing for now - too much info given to the user
            'title'              => $this->title,
            'description'        => $this->description,
            'slug'               => $this->slug,
            'order_column'       => $this->order_column,
            'form_element_types' => FormElementType::collection($this->formElementTypes),
            'created_at'         => $this->created_at,
            'updated_at'         => $this->updated_at,
            'jot_entries'        => JotEntry::collection($this->whenLoaded('jotEntries')),
        ];
    }
}
