<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
{

    public function toArray($request)
    {
//        return parent::toArray($request);

        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body
        ];
    }

    public function with($request)
    {
       // return parent::with($request); // TODO: Change the autogenerated stub

        return [
            'version' => '1.0.0',
            'author_url' => url('http://mahadi.com')
        ];
    }
}
