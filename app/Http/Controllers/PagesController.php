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

  public function result() {
    // $livehouses = Livehouse::all();
    $livehouses = Livehouse::latest("created_at")->latest("updated_at")->created()->get();
    return view("pages.result", compact("livehouses", "livehouse"));
  }

  public function search() {
    $provinces = Province::all();
    $genres = Genre::all();

    $smokes = ["喫煙可", "分煙", "禁煙"];
    return view("pages.search", compact("provinces", "genres", "smokes"));
  }

  public function show($id) {
    $livehouses = Livehouse::all();
    $livehouse = Livehouse::findOrFail($id);
    // $evaluations = Evaluation::where("livehouse_id", $id)->get();
    $evaluations = Evaluation::latest("created_at")->latest("updated_at")->created()->get();

    return view("pages.show", compact("livehouses", "livehouse", "evaluations"));
  }

  public function sendMessage($id) {
    $livehouses = Livehouse::all();
    $livehouse = Livehouse::findOrFail($id);
    return view("pages.sendMessage", compact("livehouses", "livehouse"));
  }

  public function evaluate($id) {
    $livehouses = Livehouse::all();
    $livehouse = Livehouse::findOrFail($id);

    return view("pages.evaluate", compact("livehouses", "livehouse", "livehouse_id"));
  }
}
