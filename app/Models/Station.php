<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'code',
      'address',
      'price',
      'schedule',
      'line_id'
    ];

    public function routes (){
      return $this->belongsToMany(Route::class);
    }

    public function line (){
      return $this->belongsTo(Line::class);
    }
}
