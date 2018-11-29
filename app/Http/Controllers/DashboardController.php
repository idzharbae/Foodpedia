<?php

namespace App\Http\Controllers;
use App\Baku;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function home(){
    	$all  = Baku::all()->sortByDesc('updated_at');
        return view('admin.dashboard',compact('all'));
    }
    public function chart()
      {
        $result = \DB::table('bakus')
                    ->get();
        return response()->json($result);
      }
}
