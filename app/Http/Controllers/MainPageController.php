<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Faq;
use App\Menu;
use App\Testimoni;
use App\Contact;

class MainPageController extends Controller
{
  public function home(){
    $faq = Faq::all();
    $menu = Menu::all();
    $testimoni = Testimoni::all();
    // return ['faq' => $faq, 'menu' => $menu];
    return view('welcome', [
      'faq' => $faq,
      'menu' => $menu,
      'testimoni' => $testimoni
    ]);
  }
  public function contact(Request $request){
    $this->validate($request,
      [
          'name' => 'required',
          'email' => 'required',
          'subject' => 'required',
          'message' => 'required'
      ]
    );
    $contact = new Contact;
    $contact->name = $request->input('name');
    $contact->email = $request->input('email');
    $contact->subject = $request->input('subject');
    $contact->message = $request->input('message');
    $contact->save();
    return redirect("/")->with('info_success_contact', 'Thanks For your Message!');
  }
}
