<?php

namespace App\Http\Resources;

use App\Http\Resources\Jotting;
use Illuminate\Http\Resources\Json\JsonResource;

class JotEntry extends JsonResource
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
            'id'         => $this->id,
            'jottings'   => Jotting::collection($this->whenLoaded('jottings')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
