<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;
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
        $privilege = sprintf("%010d",decbin(\Auth::user()->privilege));
        if($privilege[8] == '1')
            return view('admin.register', ['human'=>$human]);
        else
            return redirect('admin/dashboard')->with('error','Anda tidak memiliki akses ke fitur register admin.');
    }
    public function delete($id){
    	$human = User::findOrFail($id);
    	$human->delete();
    	return redirect('/admin/register')->with('info','User deleted sucessfully');
    }
    public function edit(Request $request, $id){
        $this->validate($request,[
    		'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|exists:users',
            'password' => 'required|string|min:6|confirmed'
    	]);
        if($request->input('password') != $request->input('password_confirmation')){
            return redirect('/admin/register')->with('error', 'Password confirm did not match.');
        }
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if ( !$request->input('password') == '')
        {
            $user->password = Hash::make($request->input('password'));
        }
        $privileges = 0;
        foreach($request->input('privileges') as $privilege){
            $privileges += $privilege;
        }
        $user->privilege = $privileges;
    	$user->update();
        return redirect('/admin/register')->with('info', 'User updated successfully.');
    }
}
