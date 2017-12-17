<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Note extends Resource
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
         'uid' => $this->uid,
         'name' => $this->name,
         'content' => $this->content,
         'created_at' => (string) $this->created_at,
         'updated_at' => (string) $this->updated_at
       ];
     }
}
