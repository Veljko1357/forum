<?php

namespace App\Http\Resources;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return 
        [
            "id"=> $this->id,
            // "user"=> $this-UserResource::make($this->user),
            "user"=> $this->whenLoaded('user', fn () => UserResource::make($this->user)),
            "title"=> $this->title,
            "body"=> $this->body,
            "updated_at" => $this->updated_at,
            "created_at" => $this->created_at,
        ];
    }
}
