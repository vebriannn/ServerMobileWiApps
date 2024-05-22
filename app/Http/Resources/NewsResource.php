<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
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
            'jenis_wisata' => $this->jenis_wisata,
            'title' => $this->title,
            'tag' => $this->tag,
            'short_deskripsi' => $this->short_deskripsi,
            'long_deskripsi' => $this->long_deskripsi,
            'location' => $this->location,
            'harga' => $this->harga,
            'ranting' => $this->ranting,
            'url_images' => $this->url_images,
        ];
    }
}
