<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestResault extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'basal',
        'additional',
        'child_id',
         'dim_id'
    ];
}
