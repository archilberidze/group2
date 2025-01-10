<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class singers extends Model
{
    protected $table = 'singers';
    protected $fillable = ['name', 'age'];


    public function scopeNameLike($query, $name){
        return $query->where('name', 'like', '%'.$name.'%');
    }
}
