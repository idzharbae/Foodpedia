<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Slideshow;
class SlideShowController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show(){
    	$ss = Slideshow::all();
    	return view('admin.Slideshow', ['ss'=>$ss]);
    }

    public function add(Request $request){
    	$this->validate($request,[
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
    	]);
    	$ss = new Slideshow;
        if($request->hasFile('image')){
            $name = Storage::disk('local')->put('ss', $request->image);
            $ss->image = $name;
        }
    	$ss->save();
    	return redirect('/admin/ss')->with('info','ss Saved Successfully!');
    }
    public function update($id){
    	$ss = Slideshow::find($id);
    	return view('update', ['ss'=>$ss]);
    }
    public function edit(Request $request, $id){
    	$this->validate($request,[
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg'
    	]);
        $ss = Slideshow::find($id);
        if($request->hasFile('image')){
            Storage::disk('local')->delete('ss',$ss->image);
            $name = Storage::disk('local')->put('ss', $request->image);
            $ss->image = $name;
        }
    	$ss->save();
        return redirect('/admin/ss')->with('info','ss Updated Successfully!');
    }
    public function read($id){
    	$ss=Slideshow::find($id);
    	return view('read', ['ss'=>$ss]);

    }
    public function delete($id){
        $ss = Slideshow::find($id);
        $exist = Storage::disk('local')->exists('ss',$ss->image);
        if($exist){
            Storage::disk('local')->delete('ss',$ss->image);
        }
        $ss->delete();
    	return redirect('/admin/ss')->with('info','ss Deleted Successfully!');
    }
}
