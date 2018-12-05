<?php

namespace App\Http\Controllers;
use App\Baku;
use App\Kolegial;
use App\Absen;
use App\Staff;
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
        $memberCount  = Kolegial::select('updated_at')->count();
        $lastMember = Kolegial::select('updated_at')->orderByDesc('updated_at')->skip(0)->take(1)->get();
        $staff = Staff::all();
        $absen = Absen::all();
        return view('admin.dashboard',compact('all','memberCount','lastMember','staff','absen'));
    }
    public function chart()
      {
        $result = \DB::table('bakus')
                    ->get();
        return response()->json($result);
      }
}
