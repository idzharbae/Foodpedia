<?php

namespace App\Http\Controllers;
use App\Baku;
use App\Kolegial;
use App\Visitor;
use App\Absen;
use App\Staff;
use App\Contact;
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
        $msgAll = Contact::select('updated_at')->orderByDesc('updated_at')->get();
        $msgUnread = Contact::where('read',0)->count();
        $staff = Staff::all();
        $absen = Absen::all();
        return view('admin.dashboard',compact('all','memberCount','lastMember','staff','absen','msgAll','msgUnread'));
    }
    public function chart()
      {
        $result = \DB::table('bakus')
                    ->get();
        return response()->json($result);
      }
      public function visitor()
      {
        $result = Visitor::select('created_at')->orderByDesc('created_at')->skip(0)->take(7)->get();
        return response()->json($result);
      }
}
