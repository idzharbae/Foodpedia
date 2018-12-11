<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Baku;
class BakuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function home(){
        $baku = Baku::all();
        $privilege = sprintf("%010d",decbin(\Auth::user()->privilege));
        if($privilege[7] == '1')
            return view('admin.bahan', ['baku'=>$baku]);
        else
            return redirect('admin/dashboard')->with('error','Anda tidak memiliki akses ke fitur bahan baku.');

        
    }

    public function add(Request $request){
      //  dd($request);
    	$this->validate($request,[
    		'name'=>'required',
        'total'=>'required',
        'batas'=>'required',
    	]);
    	$baku = new Baku;
    	$baku->name = $request->input('name');
        $baku->total = $request->input('total');
        $baku->batas = $request->input('batas');
        $baku->save();
    	return redirect('/admin/bahan')->with('info','Baku Saved Successfully!');
    }
    public function update($id){
    	$baku = Baku::find($id);
    	return view('update', ['baku'=>$baku]);
    }
    public function edit(Request $request, $id){
        $this->validate($request,[
            'name'=>'required',
            'total'=>'required',
            'batas'=>'required',
        ]);
        $baku = Baku::find($id);
        $baku->name = $request->input('name');
        $baku->total = $request->input('total');
        $baku->batas = $request->input('batas');
        $baku->save();
        return redirect('/admin/bahan')->with('info','Menu Updated Successfully!');
    }
    public function read($id){
    	$baku=Baku::find($id);
    	return view('read', ['menu'=>$baku]);
    }
    public function delete($id){
    	Baku::where('id',$id)->delete();
    	return redirect('/admin/bahan')->with('info','Menu Deleted Successfully!');
    }
}
