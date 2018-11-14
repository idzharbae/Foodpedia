<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function home(){
    	$category = Category::all();
    	return view('welcome', ['category'=>$category]);
    }

    public function add(Request $request){
    	$this->validate($request,[
    		'name'=>'required'
    	]);
    	$category = new Category;
    	$category->name = $request->input('name');
    	$category->save();
    	return redirect('/')->with('info','Category Saved Successfully!');
    }
    public function update($id){
    	$category = Category::find($id);
    	return view('update', ['category'=>$category]);
    }
    public function edit(Request $request, $id){
    	$this->validate($request,[
    		'name'=>'required'
    	]);
        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->save();
        return redirect('/')->with('info','Category Updated Successfully!');
    }
    public function read($id){
    	$category=Category::find($id);
    	return view('read', ['category'=>$category]);

    }
    public function delete($id){
    	Category::where('id',$id)->delete();
    	return redirect('/')->with('info','Category Deleted Successfully!');
    }
}
