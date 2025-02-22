<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
  public function album()
{
   return $this->hasMany('App\Album');
}

public function songs(){
      return $this->hasMany(Song::class);
}
}
