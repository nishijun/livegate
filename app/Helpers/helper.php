<?php
namespace App\Helpers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Config\smoking;
use App\Province;
use App\Livehouse;
use App\Evaluation;
use App\Genre;

class Helper {
  public static function getAveEvaluations($id) {
    // $getEvaluations = [];
    //
    // $a = Evaluation::whereHas("livehouse", function($q) {
    //   $q->where('id', "=", $id);
    // })->get();

    $evaluations = Evaluation::where("livehouse_id", $id)->get();

    // dd($evaluations);

    $equipment = [];
    $acoustic = [];
    $staff = [];
    $facility = [];
    $access = [];
    $food = [];

    foreach ($evaluations as $evaluation) {
      $equipment[] = $evaluation->equipment;
      $acoustic[] = $evaluation->acoustic;
      $staff[] = $evaluation->staff;
      $facility[] = $evaluation->facility;
      $access[] = $evaluation->access;
      $food[] = $evaluation->food;
    }

    dd($equipment);

    // $group = [
    //   array_sum($equipment)/count($equipment),
    //   array_sum($acoustic)/count($acoustic),
    //   array_sum($staff)/count($staff),
    //   array_sum($facility)/count($facility),
    //   array_sum($access)/count($access),
    //   array_sum($food)/count($food)
    // ];
    //
    // return $group;
  }
}
