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
    $provinces = Province::all();
    $genres = Genre::all();

    $smokes = ["喫煙可", "分煙", "禁煙"];
    return view("pages.signup", compact("smokes", "provinces", "genres"));
  }

  public function store() {
    $inputs = \Request::all();
    dd($inputs);
  }

  public function result() {
    $livehouses = Livehouse::all();
    return view("pages.result", compact("livehouses"));
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
    return view("pages.show", compact("livehouses", "livehouse"));
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
