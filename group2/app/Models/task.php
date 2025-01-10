<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $table ='task';
    protected $fillable = ['tittle','description'];

    public function scopeTittleLike($quary,$tittle){

        return $quary->where('tittle','like', '%'.$tittle.'%');
    }
}
