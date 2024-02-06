<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ChirpResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'         => $this->resource->id,
            'message'    => $this->resource->message,
            'created_at' => $this->resource->created_at->diffForHumans(),
            'user'       => UserResource::make($this->whenLoaded('user'))
        ];
    }
}
