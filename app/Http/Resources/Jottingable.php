<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Jottingable extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @todo factor out into Jottingable Resources
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'    => $this->id,
            'value' => $this->getMorphClass() === 'jot_number'
            ? number_format($this->value * (10 ** $this->power_of_ten) * ($this->positive_value ? 1 : -1), abs($this->power_of_ten))
            : $this->value,
        ];
    }
}
