<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\CommentResource;
use Illuminate\Http\Resources\Json\JsonResource;

class PostShowResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'username' => $this->user->username,
            'slug' => $this->slug,
            'url' => $this->url,
            'comments' => CommentResource::collection($this->whenLoaded('comments')),
            'votes' => $this->votes,
            'postVotes' => $this->whenLoaded('postVotes'),
            'created_at' => $this->created_at->diffForHumans(),
        ];
    }
}
