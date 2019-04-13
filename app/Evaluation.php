<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Evaluation extends Model {
  protected $fillable = ["livehouse_id", "body", "equipment", "acoustic", "staff", "access", "facility", "food", "ave_evaluation"];

  public function livehouse() {
    return $this->belongsTo('App\livehouse');
  }

  public function scopeCreated($query) {
    $query->where("created_at", "<=", Carbon::now());
  }
}
