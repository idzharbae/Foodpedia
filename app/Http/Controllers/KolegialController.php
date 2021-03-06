<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Kolegial;
class KolegialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function home(){
    	$kolegial = Kolegial::all();
        $privilege = sprintf("%010d",decbin(\Auth::user()->privilege));
        if($privilege[4] == '1')
            return view('admin.kolegial', ['kolegial'=>$kolegial]);
        else
            return redirect('admin/dashboard')->with('error','Anda tidak memiliki akses ke fitur kolegial.');
    	
    }

    public function add(Request $request){
    	$this->validate($request,[
    		'Fname'=>'required',
            'Lname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'rank'=>'required',
        ]);
    	$kolegial = new Kolegial;
    	$kolegial->Fname = $request->input('Fname');
        $kolegial->Lname = $request->input('Lname');
        $kolegial->email = $request->input('email');
        $kolegial->phone = $request->input('phone');
        $kolegial->rank = $request->input('rank');
        
        $kolegial->save();
    	return redirect('/admin/kolegial')->with('info','Kolegial Saved Successfully!');
    }
    public function update($id){
    	$kolegial = Kolegial::find($id);
    	return view('update', ['kolegial'=>$kolegial]);
    }
    public function edit(Request $request, $id){
    	$this->validate($request,[
    		'Fname'=>'required',
            'Lname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'rank'=>'required',
            'status'=>'required',
    	]);
        $kolegial = Kolegial::find($id);
    	$kolegial->Fname = $request->input('Fname');
        $kolegial->Lname = $request->input('Lname');
        $kolegial->email = $request->input('email');
        $kolegial->phone = $request->input('phone');
        $kolegial->rank = $request->input('rank');
        $kolegial->status = $request->input('status');
    	$kolegial->save();
    	return redirect('/admin/kolegial')->with('info','Kolegial Saved Successfully!');
    }
    public function read($id){
    	$kolegial=Kolegial::find($id);
    	return view('read', ['kolegial'=>$kolegial]);

    }
    public function delete($id){
    	Kolegial::where('id',$id)->delete();
    	return redirect('/admin/kolegial')->with('info','Kolegial Saved Successfully!');
    }
    public function approve($id){
        $kolegial = Kolegial::find($id);
        $kolegial->status = 1;
        $kolegial->save();
    	return redirect('/admin/kolegial')->with('info','Kolegial Saved Successfully!');
    }
}
