<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config\smoking;
use App\Province;
use App\Livehouse;
use App\Evaluation;
use App\Genre;
use Helper;
use App\Http\Requests\LivehouseRequest;
use App\Http\Requests\EvaluationRequest;

class PagesController extends Controller {
  public function index() {
    return view("pages.index");
  }

  public function signup() {
    $provinces = Province::all()->pluck("name", "id");
    $genres = Genre::all();

    return view("pages.signup", compact("smokes", "provinces", "genres"));
  }

  public function storeLivehouse(LivehouseRequest $request) {
    Livehouse::create($request->validated());
    return redirect("result");
  }

  public function storeEvaluation(EvaluationRequest $request, $id) {
    Evaluation::create($request->validated());
    return redirect("result/".$id);
  }

  public function result(Request $request) {

    $name = $request->input("name");
    $province_id = $request->input("province_id");
    $capacitie_type = $request->input("capacitie_type");
    $smoking_type = $request->input("smoking_type");
    $test = $request->input("test");

    $queries = [$name, $province_id, $capacitie_type, $smoking_type, $test];

    if (
      isset($name) ||
      isset($province_id) ||
      isset($capacitie_type) ||
      isset($smoking_type) ||
      isset($test)
    ) {
      $livehouses = Livehouse::when($name, function($q) use($name) {
        $q->where("name", "like", "%".$name."%");
      })->when($province_id, function($q) use($province_id){
        $q->where("province_id", $province_id);
      })->when($capacitie_type, function($q) use($capacitie_type){
        $q->where("capacitie_type", $capacitie_type);
      })->when($smoking_type, function($q) use($smoking_type){
        $q->where("smoking_type", $smoking_type);
      })->when($test, function($q) use($test){
        $q->where("test", $test);
      })->get();
    } else {
      $livehouses = Livehouse::latest("created_at")->latest("updated_at")->created()->get();
    }

    return view("pages.result", compact("livehouses"));
  }

  public function show($id) {
    $livehouses = Livehouse::all();
    $livehouse = Livehouse::findOrFail($id);
    $evaluations = Evaluation::latest("created_at")->latest("updated_at")->created()->get();

    return view("pages.show", compact("livehouses", "livehouse", "evaluations"));
  }

  public function evaluate($id) {
    $livehouses = Livehouse::all();
    $livehouse = Livehouse::findOrFail($id);

    return view("pages.evaluate", compact("livehouses", "livehouse", "livehouse_id"));
  }

  public function searchLivehouses(Request $request) {
    $provinces = Province::all()->pluck("name", "id");
    $genres = Genre::all();

    $name = $request->input("name");
    $province_id = $request->input("province_id");
    $capacitie_type = $request->input("capacitie_type");
    $smoking_type = $request->input("smoking_type");
    $test = $request->input("test");

    return view("pages.search", compact("provinces", "genres", "name", "province_id", "capacitie_type", "smoking_type", "test"));
  }
}
