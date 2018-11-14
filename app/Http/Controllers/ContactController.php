<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Contact;
class ContactController extends Controller
{
    public function home(){
    	$contact = Contact::all();
    	return view('welcome', ['contact'=>$contact]);
    }

    public function add(Request $request){
    	$this->validate($request,[
    		'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
    	]);
    	$contact = new Contact;
    	$contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
    	$contact->message = $request->input('message');
    	$contact->save();
    	return redirect('/')->with('info','Menu Saved Successfully!');
    }
    public function update($id){
    	$contact = Contact::find($id);
    	return view('update', ['contact'=>$contact]);
    }
    public function edit(Request $request, $id){
    	$this->validate($request,[
    		'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
    	]);
        $contact = Contact::find($id);
    	$contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
    	$contact->message = $request->input('message');
    	$contact->save();
        return redirect('/')->with('info','Menu Updated Successfully!');
    }
    public function read($id){
    	$contact=Contact::find($id);
    	return view('read', ['contact'=>$contact]);

    }
    public function delete($id){
    	Contact::where('id',$id)->delete();
    	return redirect('/')->with('info','Menu Deleted Successfully!');
    }
}
