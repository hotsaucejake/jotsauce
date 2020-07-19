<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class NewAccessToken extends JsonResource
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
            'accessToken' => [
                'abilities' => $this->accessToken->abilities,
                'name' => $this->accessToken->name,
            ],
            'plainTextToken' => $this->plainTextToken,
        ];
    }
}
