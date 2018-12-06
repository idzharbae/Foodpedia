<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Faq;
use App\Menu;
use App\Testimoni;
use App\Contact;
use App\Kolegial;

class MainPageController extends Controller
{
  // GET request main page
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

  public function show(){
      $menu = Menu::all();
      return view('menu.menu', compact('menu'));
  }
  // POST request contact
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
    return redirect("/")->with('info_success_contact', 'Terima kasih untuk pesannya!');
  }

  // POST request kolegial
  public function kolegial(Request $request){
    $this->validate($request,
      [
        'Fname'=>'required',
        'Lname'=>'required',
        'email'=>'required',
        'phone'=>'required',
        'rank'=>'required'
      ]
    );
    $kolegial = new Kolegial;
    $kolegial->Fname = $request->input('Fname');
    $kolegial->Lname = $request->input('Lname');
    $kolegial->email = $request->input('email');
    $kolegial->phone = $request->input('phone');
    $kolegial->rank = $request->input('rank');
    $kolegial->save();
    return redirect('/')->with('info_success_kolegial', 'Terima kasih telan memesan Kolegial');
  }
}
