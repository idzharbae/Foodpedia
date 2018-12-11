<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Menu;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function home(){
    	$menu = Menu::all();
    	return view('admin.menu', ['menu'=>$menu]);
    }
    public function add(Request $request){
        // dd($request);
    	$this->validate($request,[
    		'name'=>'required',
            'recommended'=>'required',
            'harga' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
    	]);
    	$menu = new Menu;
    	$menu->name = $request->input('name');
        $menu->description = $request->input('description');
        $menu->recommended = $request->input('recommended');
        $menu->harga = $request->input('harga');
        if($request->hasFile('image')){
            $name = Storage::disk('local')->put('menu', $request->image);
            $menu->image = $name;
        }
    	$menu->save();
    	return redirect('admin/menu')->with('info','Menu Saved Successfully!');
    }
    public function update($id){
    	$menu = Menu::find($id);
    	return view('update', ['menu'=>$menu]);
    }
    public function edit(Request $request, $id){
    	$this->validate($request,[
            'name'=>'required',
            'harga' => 'required',
            'recommended'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg'
    	]);
        $menu = Menu::find($id);
        $menu->name = $request->input('name');
        $menu->recommended = $request->input('recommended');
        $menu->harga = $request->input('harga');
        $menu->description = $request->input('description');
        if($request->hasFile('image')){
            Storage::disk('local')->delete('menu',$menu->image);
            $name = Storage::disk('local')->put('menu', $request->image);
            $menu->image = $name;
        }
    	$menu->save();
        return redirect('/admin/menu')->with('info','Menu Updated Successfully!');
    }
    public function read($id){
    	$menu=Menu::find($id);
    	return view('read', ['menu'=>$menu]);
    }
    public function delete($id){
    	$menu = Menu::find($id);
        $exist = Storage::disk('local')->exists('menu',$menu->image);
        if($exist){
            Storage::disk('local')->delete('menu',$menu->image);
        }
        $menu->delete();
    	return redirect('/admin/menu')->with('info','Menu Deleted Successfully!');
    }
}
