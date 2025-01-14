<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    protected $table ='country';
    protected $fillable = ['name'];

    public function cities(){
        return $this->hasMany(city::class, 'country_id', 'id');
    }
}
