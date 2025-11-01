<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'content',
        'quantity',
        'yield',
        'share_token',
    ];

    protected $dates = [
        'date',
    ];
}
