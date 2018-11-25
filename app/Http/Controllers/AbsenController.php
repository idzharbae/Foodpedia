<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Absen;
use App\Staff;
class AbsenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function home(){
        $staff = Staff::all();
        $absen = Absen::all();
        $test = null;
        return view('admin.absen',compact('staff','absen','test'));
    }
    public function cek(Request $request){
        $this->validate($request,[
    		'timereq'=>'required'
        ]);
        
        $staff = Staff::all();
        $absen = Absen::all();

        $time = $request->input('timereq');
        $queryT = date('Y-m-d', strtotime($time));
        $test = Absen::where('save_date',$time)->get();
        return view('admin.absen',compact('staff','absen','test'));
    }
    public function datang($id){
        
        $human = Staff::find($id);
        $absen = new Absen;
        $absen->id_staff = $id;
        $absen->jam_dateng = date('H:i:s');
        $absen->save_date = date('Y-m-d');
        $absen->status = 1;
        $absen->save();
    	return redirect('/admin/absen')->with('info','Article Saved Successfully!');
    }
    public function pulang($id_absen){
        $absen = Absen::find($id_absen);
        $absen->jam_pulang = date('H:i:s');
        $absen->status = 2;
        $absen->save();
        return redirect('/admin/absen')->with('info','Article Saved Successfully!');
    }

}
