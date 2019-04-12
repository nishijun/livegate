<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config\smoking;
use App\Province;
use App\Livehouse;
use App\Evaluation;
use App\Genre;
use Helper;

class PagesController extends Controller {
  public function index() {
    return view("pages.index");
  }

  public function signup() {
    $provinces = Province::all()->pluck("name", "id");
    $genres = Genre::all();

    $smokes = ["喫煙可", "分煙", "禁煙"];
    return view("pages.signup", compact("smokes", "provinces", "genres"));
  }

  public function store() {
    $inputs = \Request::all();
    Livehouse::create($inputs);

    return redirect("result");
  }

  public function result() {
    $livehouses = Livehouse::all();
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
    $evaluations = Evaluation::where("livehouse_id", $id)->get();

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
    return view("pages.evaluate", compact("livehouses", "livehouse"));
  }
}
