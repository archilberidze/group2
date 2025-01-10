<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class singers extends Model
{

    protected $primaryKey = 'id';
    protected $table = 'singers';
    protected $fillable = ['id','name', 'age', 'team_id'];

}
