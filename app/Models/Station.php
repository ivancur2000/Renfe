<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    public function routes (){
      $this->belongsToMany(Route::class);
    }

    public function lines (){
      $this->belongsTo(Line::class);
    }
}
