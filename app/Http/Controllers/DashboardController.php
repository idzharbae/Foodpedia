<?php

namespace App\Http\Controllers;
use App\Baku;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function home(){
    	$all  = Baku::orderByDesc('updated_at')->get();
        return view('admin.dashboard',compact('all'));
    }
    public function chart()
      {
        $result = \DB::table('bakus')
                    ->get();
        return response()->json($result);
      }
}
