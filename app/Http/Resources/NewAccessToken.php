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
            'accessToken' => $this->accessToken,
            'token' => [
                'expires_at' => Carbon::now()->addHours(1),
                'name' => $this->token->name,
                'scopes' => $this->token->scopes,
                'user_id' => $this->token->user_id
            ]
        ];
    }
}
