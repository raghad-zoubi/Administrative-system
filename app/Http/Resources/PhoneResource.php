<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PhoneResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'number'=> $this->phone_num,
            'name'=>$this->name,


        ];
    }
}
