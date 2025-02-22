<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
  public function artist(){
    return $this->belongsTo(Artist::class);

  }

  protected $fillable =[
    'artistid' , 'name', 'album', 'chords' , 'views'
    ];
}
