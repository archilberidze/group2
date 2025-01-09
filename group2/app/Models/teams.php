<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teams extends Model
{
    protected $table = 'teams';
    protected $fillable = [
        'id',
        'name',
        'championship',
    ];
}
