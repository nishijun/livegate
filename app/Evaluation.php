<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model {
  public function livehouse() {
    // 投稿は1つのカテゴリーに属する
    return $this->belongsTo('App\livehouse');
  }
}
