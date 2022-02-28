<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    public function preferences(){
      return $this->belongsToMany(Preference::class);
    }

    public function stations (){
      return $this->belongsToMany(Station::class);
    }
}
