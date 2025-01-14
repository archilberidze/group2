<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    protected $table = 'city';
  
    protected $fillable = ['name', 'countrty_id', 'population'];

    public function country(){
        return $this->belongsTo(country::class, 'country_id', 'id');
    }
}
