<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalCondition extends Model
{
    use HasFactory;
    protected $fillable = [
        'child_id',
        'ques_id',
        'answer'
    ];
}
