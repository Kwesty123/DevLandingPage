<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applicationportfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'imagelink',
        'appname',
        'description',
        'link',
        'language',
        'created',
        'type',
        'status'
    ];
}
