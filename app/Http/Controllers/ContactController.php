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
use App\Contact;
use App\Mail\ContactSent;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller {

  public function sendMessage($id) {
    $livehouse = Livehouse::findOrFail($id);
    return view("contacts.sendMessage", compact("livehouse"));
  }

  public function confirm(Request $request, $id) {
    $livehouse = Livehouse::findOrFail($id);
    $contact = new Contact($request->all());

    $this->validate($request, [
      "name" => "required",
      "email" => "required | email",
      "message" => "required",
    ]);

    return view('contacts.confirm', compact('contact', "livehouse"));
  }

  public function complete(Request $request, $id) {
    $livehouse = Livehouse::findOrFail($id);

    $action = $request->get("action", "back");
    $input = $request->except("action");
    $contact = Contact::make($request->all());
    Mail::to($livehouse->email)->send(new ContactSent($contact));

    if ($action === "送信する") {
      return view('contacts.complete', compact("livehouse"));
    } else {
      return redirect()->action("result/".$id."/sendMessage")->withInput($input);
    }
  }
}
