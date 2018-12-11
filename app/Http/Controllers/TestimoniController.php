<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Testimoni;
class TestimoniController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function home(){
    	$testimoni = Testimoni::all();
        $privilege = sprintf("%010d",decbin(\Auth::user()->privilege));
        if($privilege[0] == '1')
            return view('admin.testimoni', ['testimoni'=>$testimoni]);
        else
            return redirect('admin/dashboard')->with('error','Anda tidak memiliki akses ke fitur testimoni.');
    	
    }

    public function add(Request $request){
    	$this->validate($request,[
    		'name'=>'required',
            'message'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
    	]);
    	$testimoni = new Testimoni;
    	$testimoni->name = $request->input('name');
        $testimoni->message = $request->input('message');
        if($request->hasFile('image')){
            $name = Storage::disk('local')->put('testimoni', $request->image);
            $testimoni->image = $name;
        }
    	$testimoni->save();
    	return redirect('/admin/testimoni')->with('info','Testimoni Saved Successfully!');
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
        return redirect('/admin/testimoni')->with('info','Testimoni Updated Successfully!');
    }
    public function read($id){
    	$testimoni=Testimoni::find($id);
    	return view('read', ['testimoni'=>$testimoni]);

    }
    public function delete($id){
        $testimoni = Testimoni::find($id);
        $exist = Storage::disk('local')->exists('testimoni',$testimoni->image);
        if($exist){
            Storage::disk('local')->delete('testimoni',$testimoni->image);
        }
        $testimoni->delete();
    	return redirect('/admin/testimoni')->with('info','Testimoni Deleted Successfully!');
    }
}
