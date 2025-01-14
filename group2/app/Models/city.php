<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    protected $fillable = ['name'];

    public function country(){
        return $this->belongsTo(Country::class , 'country_id', 'id');
  }

}
