<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livehouse extends Model
{
  protected $fillable = ['email', 'province_id', "price", "smoking_type", "test", 'published_at'];

  public function evaluations(){
		return $this->hasMany('App\Evaluation', 'livehouse_id');
	}

  public function province() {
    return $this->belongsTo("App\Province");
  }

  public function genres() {
    return  $this->belongsToMany("App\Genre")->withTimestamps();
  }
}
