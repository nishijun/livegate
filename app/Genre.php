<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
  public function livehouses() {
    return  $this->belongsToMany("Livehouse")->withTimestamps();
  }
}
