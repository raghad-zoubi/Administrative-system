<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberFamily extends Model
{
    use HasFactory;
    protected $fillable = [
        'child_id',
        'gender',
        'age',
        'Educ_level',
        'name',
        'id'
    ];
}
