<?php

namespace App\Http\Resources\bayan;

use App\Models\EductionalChoice;
use App\Models\EductionalCondition;
use App\Models\EductionalQuestion;
use App\Models\Titels;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class E_A_Q_Resource extends JsonResource
{

    public function toArray(Request $request): array
    {

        $choice=null;

             if($this->id == '4'||$this->id == '1'||$this->id == '2'||$this->id == '3'||$this->id == '5'||$this->id == '6' )
                $choice=EductionalChoice::where('edu_id',$this->id)->get(['choice']);

        $ans=EductionalCondition::where('ques_id',$this->id)->where('child_id',$request->id)->first();

        return [
            'question' => $this->question,
            'answer'=>$ans->answer,
            'choice'=>$choice

        ];



    }
}
