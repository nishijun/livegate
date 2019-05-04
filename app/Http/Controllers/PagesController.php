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
use Intervention\Image\ImageManagerStatic as Image;

class PagesController extends Controller {
  public function index() {
    return view("pages.index");
  }

  public function signup() {
    $genre_list = Genre::pluck("name", "id");
    $provinces = Province::all()->pluck("name", "id");
    $genres = Genre::all();

    return view("pages.signup", compact("smokes", "provinces", "genres", "genre_list"));
  }

  public function storeLivehouse(LivehouseRequest $request) {
    $file = $request->file('img');
    $fileName = str_random(20).'.'.$file->getClientOriginalExtension();
    Image::make($file)->save(public_path('img/'.$fileName));
    $livehouse = new Livehouse;
    $livehouse->img = $fileName;
    $livehouse->name = $request->input("name");
    $livehouse->email = $request->input("email");
    $livehouse->province_id = $request->input("province_id");
    $livehouse->capacitie_type = $request->input("capacitie_type");
    $livehouse->smoking_type = $request->input("smoking_type");
    $livehouse->test = $request->input("test");
    $livehouse->price = $request->input("price");
    $livehouse->catchcopy = $request->input("catchcopy");
    $livehouse->homepage = $request->input("homepage");
    $livehouse->save();
    $livehouse->genres()->attach($request->input("genres"));
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
    $genre_id = $request->input("genres");

    $queries = [$name, $province_id, $capacitie_type, $smoking_type, $test, $genre_id];

    if (
      isset($name) ||
      isset($province_id) ||
      isset($capacitie_type) ||
      isset($smoking_type) ||
      isset($test) ||
      isset($genre_id)
    ) {
      $livehouses = Livehouse::when($name, function($q) use($name) {
        $q->where("name", "like", "%".$name."%");
      })->when($province_id, function($q) use($province_id) {
        $q->where("province_id", $province_id);
      })->when($capacitie_type, function($q) use($capacitie_type) {
        $q->where("capacitie_type", $capacitie_type);
      })->when($smoking_type, function($q) use($smoking_type) {
        $q->where("smoking_type", $smoking_type);
      })->when($test, function($q) use($test) {
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
    $evaluations = Evaluation::where("livehouse_id", $id)->latest("created_at")->latest("updated_at")->created()->get();

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
    $genre_id = $request->input("genres");

    return view("pages.search", compact("provinces", "genres", "name", "province_id", "capacitie_type", "smoking_type", "test", "genre_id"));
  }
}
