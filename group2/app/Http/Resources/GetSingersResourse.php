<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetSingersResourse extends JsonResource
{
   public function toArray(Request $request): array{
       return [
           'id' => $this -> resource -> id,
           'name' => $this->resource->name,
           'age' => $this->resource->age,
           'team_id' => $this->resource->team_id,

       ];
   }
}
