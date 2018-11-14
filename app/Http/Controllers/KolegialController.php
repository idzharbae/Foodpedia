<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Kolegial;
class KolegialController extends Controller
{
    public function home(){
    	$kolegial = Kolegial::all();
    	return view('welcome', ['kolegial'=>$kolegial]);
    }

    public function add(Request $request){
    	$this->validate($request,[
    		'Fname'=>'required',
            'Lname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'rank'=>'required',
    	]);
    	$kolegial = new Menu;
    	$kolegial->Fname = $request->input('Fname');
        $kolegial->Lname = $request->input('Lname');
        $kolegial->email = $request->input('email');
        $kolegial->phone = $request->input('phone');
        $kolegial->rank = $request->input('rank');
        
        $kolegial->save();
    	return redirect('/')->with('info','Kolegial Saved Successfully!');
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
    	]);
        $kolegial = Kolegial::find($id);
    	$kolegial->Fname = $request->input('Fname');
        $kolegial->Lname = $request->input('Lname');
        $kolegial->email = $request->input('email');
        $kolegial->phone = $request->input('phone');
        $kolegial->rank = $request->input('rank');
    	$kolegial->save();
        return redirect('/')->with('info','Menu Updated Successfully!');
    }
    public function read($id){
    	$kolegial=Kolegial::find($id);
    	return view('read', ['kolegial'=>$kolegial]);

    }
    public function delete($id){
    	Kolegial::where('id',$id)->delete();
    	return redirect('/')->with('info','Menu Deleted Successfully!');
    }

}
