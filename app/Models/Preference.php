<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    use HasFactory;
    
    protected $fillable = [
      'name',
      'code'
    ];

    public function users(){
      return $this->belongsToMany(User::class);
    }

    public function routes (){
      return $this->belongsToMany(Route::class);
    }
}
