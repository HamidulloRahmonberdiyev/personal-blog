<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'birthday',
        'age',
        'job',
        'phone',
        'email',
        'website',
        'address',
        'level',
        'information',
        'photo',
    ];
}
