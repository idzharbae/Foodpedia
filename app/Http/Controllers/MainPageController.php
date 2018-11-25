<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Faq;
use App\Menu;
use App\Testimoni;

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
}
