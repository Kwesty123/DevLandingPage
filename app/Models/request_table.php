<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class request_table extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'request_id',
        'nameofrequest',
        'docxurl',
        'status',
        'developer',
    ];
}
