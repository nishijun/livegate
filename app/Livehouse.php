<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livehouse extends Model
{
  protected $fillable = ['email', 'province_id', "price", "smoking_type", "test", 'published_at'];
  
  public function evaluations(){
		// 投稿はたくさんのコメントを持つ
		return $this->hasMany('Evaluation', 'livehouse_id');
	}

  public function provinces() {
    return $this->belongsTo("Province");
  }

  public function genres() {
    return  $this->belongsToMany("Genre")->withTimestamps();
  }
}
