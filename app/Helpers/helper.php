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
  public static function getAveEvaluations($id, $i) {

    $evaluations = Evaluation::where("livehouse_id", $id)->get();

    $equipments = [];
    $acoustics = [];
    $staffs = [];
    $facilities = [];
    $accesses = [];
    $foods = [];

    $ave_evaluations = [];
    $results = [];

    foreach ($evaluations as $evaluation) {
      $equipments[] = $evaluation->equipment;
      $acoustics[] = $evaluation->acoustic;
      $staffs[] = $evaluation->staff;
      $facilities[] = $evaluation->facility;
      $accesses[] = $evaluation->access;
      $foods[] = $evaluation->food;
    }

    $groups = [$equipments, $acoustics, $staffs, $facilities, $accesses, $foods];

    foreach ($groups as $group) {
      $sum = 0;
      foreach($group as $value) {
        $sum += $value;
      }
      $ave = 0;
      $round = 0;
      if (count($group) == 0) {
        return false;
      }
      $ave = $sum / count($group);
      $round = round($ave, 1);
      $ave_evaluations[] = $round;
    }

    for ($a = 0; $a < count($ave_evaluations); $a++) {
      $results[] = intval($ave_evaluations[$a]);
    }
    return $results[$i];
  }

  // public static function getComments($id, $i) {
  //   $evaluations = Evaluation::where("livehouse_id", $id)->get();
  //   $comments = [];
  //
  //   foreach($evaluations as $evaluation) {
  //     $comments[] = $evaluation->body;
  //   }
  //
  //   return $comments[$i];
  // }
}
