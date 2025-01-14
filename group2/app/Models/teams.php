<?php

namespace App\Models;

use App\Models\singers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teams extends Model
{
    use HasFactory;

    protected $table = 'teams';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'championship',
    ];

    public function scopeTeamNameLike($query, $name){
        return $query->where('name', 'like', '%'.$name.'%');
    }

    public function singer(){
        return $this->hasOne(singers::class,  'id','team_id');
    }

    public function singers(){
        return $this->belongsToMany
        (singers::class,  'singers','id','team_id');

    }
}
