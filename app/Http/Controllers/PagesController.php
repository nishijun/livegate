<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config\smoking;
use App\Province;
use App\Livehouse;
use App\Evaluation;
use App\Genre;

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

  public function result() {
    $livehouses = Livehouse::all();
    $evaluations = Evaluation::all();

    return view("pages.result", compact("livehouses", "evaluations"));
  }

  public function search() {
    $provinces = Province::all();
    $genres = Genre::all();

    $smokes = ["喫煙可", "分煙", "禁煙"];
    return view("pages.search", compact("provinces", "genres", "smokes"));
  }

  public function show($id) {
    $livehouse = Livehouse::findOrFail($id);
    return view("pages.show", compact("livehouse"));
  }

  public function sendMessage() {
    return view("pages.sendMessage");
  }
}
