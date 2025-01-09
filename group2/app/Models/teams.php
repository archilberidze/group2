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
    public function scopeNameLike($query, $name){
        return $query->where('name', 'like', '%'.$name.'%');
    }
    public function scopeChampionshipLike($query, $championship){
        return $query->where('championship', 'like', '%'.$championship.'%');
    }
}
