<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
  public function livehouses()
    {
        return $this->hasMany('Livehouse', "province_id");
    }
}
