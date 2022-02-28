<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'code',
      'city_id'
    ];

    public function stations (){
      return $this->hasMany(Station::class);
    }

    public function city (){
      return $this->belongsTo(City::class);
    }
}
