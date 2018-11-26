<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function home(){
    	return view('admin.dashboard');
    }
    public function list(){
    	$human = User::all();
    	return view('admin.register', ['human'=>$human]);
    }
    public function delete($id){
    	$human = User::find($id);
    	$human->delete();
    	return redirect('/admin/register')->with('info','User deleted sucessfully');
    }
    public function edit(Request $request, $id){
    	$this->validate($request,[
    		'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed'
    	]);
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
    	$user->save();
        return redirect('/admin/register')->with('info','User Updated Successfully!');
    }
}
