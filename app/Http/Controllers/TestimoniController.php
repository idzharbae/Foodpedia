<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimoni;
class TestimoniController extends Controller
{
    public function home(){
    	$testimoni = Testimoni::all();
    	return view('welcome', ['menu'=>$testimoni]);
    }

    public function add(Request $request){
    	$this->validate($request,[
    		'name'=>'required',
            'message'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg'
    	]);
    	$testimoni = new Testimoni;
    	$testimoni->name = $request->input('name');
        $testimoni->message = $request->input('message');
        if($request->hasFile('image')){
            $name = Storage::disk('local')->put('testimoni', $request->image);
            $testimoni->image = $name;
        }
    	$testimoni->save();
    	return redirect('/')->with('info','Testimoni Saved Successfully!');
    }
    public function update($id){
    	$testimoni = Testimoni::find($id);
    	return view('update', ['testimoni'=>$testimoni]);
    }
    public function edit(Request $request, $id){
    	$this->validate($request,[
    		'name'=>'required',
            'message'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg'
    	]);
        $testimoni = Testimoni::find($id);
        $testimoni->name = $request->input('name');
        $testimoni->message = $request->input('message');
        if($request->hasFile('image')){
            Storage::disk('local')->delete('testimoni',$testimoni->image);
            $name = Storage::disk('local')->put('testimoni', $request->image);
            $testimoni->image = $name;
        }
    	$testimoni->save();
        return redirect('/')->with('info','Testimoni Updated Successfully!');
    }
    public function read($id){
    	$testimoni=Testimoni::find($id);
    	return view('read', ['testimoni'=>$testimoni]);

    }
    public function delete($id){
    	Testimoni::where('id',$id)->delete();
    	return redirect('/')->with('info','Testimoni Deleted Successfully!');
    }
}
