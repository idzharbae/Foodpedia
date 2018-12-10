<?php

namespace App\Http\Controllers;
use App\Baku;
use App\Kolegial;
use App\Visitor;
use App\Absen;
use App\Staff;
use App\Contact;
use App\Tasks;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function home(){
    	$all  = Baku::orderByDesc('updated_at')->get();
        $task = Tasks::all();
        $memberCount  = Kolegial::select('updated_at')->where('status',1)->count();
        $memberPending  = Kolegial::select('updated_at')->where('status',0)->count();
        $lastMember = Kolegial::select('updated_at')->orderByDesc('updated_at')->where('status',1)->skip(0)->take(1)->get();
        $lastMemberPending = Kolegial::select('updated_at')->orderByDesc('updated_at')->where('status',0)->skip(0)->take(1)->get();
        $msgAll = Contact::select('updated_at')->orderByDesc('updated_at')->get();
        $msgUnread = Contact::where('read',0)->count();
        $staff = Staff::all();
        $absen = Absen::all();
        $lastVisitor = Visitor::select('updated_at')->orderByDesc('updated_at')->skip(0)->take(1)->get();
        return view('admin.dashboard',compact('all','memberCount','lastMember','staff','absen','msgAll','msgUnread','memberPending','lastMemberPending','lastVisitor','task'));
    }
    public function chart()
    {
      $result = \DB::table('bakus')
                  ->get();
      return response()->json($result);
    }
    public function visitor()
    {
      $result = Visitor::select('created_at')->orderByDesc('created_at')->skip(0)->take(7)->get();
      return response()->json($result);
    }
    public function addTask(Request $request){
        $this->validate($request,[
            'description'=>'required',
            'group'=>'required',
            'deadline'=>'required',
        ]);
        $task = new Tasks;
        $task->description = $request->input('description');
        $task->group = $request->input('group');
        $task->deadline = $request->input('deadline');
        $task->save();
        return redirect('/admin/dashboard')->with('info','Task Added Successfully!');
    }
    public function check($id){
        $current = Tasks::find($id);
        if($current->status)
            $current->status = 0;
        else
            $current->status = 1;
        $current->save();
    }
    public function editTask(Request $request, $id){
        $this->validate($request,[
            'description'=>'required',
            'group'=>'required',
            'deadline'=>'required',
        ]);
        $task = Task::find($id);
        $task->description = $request->input('description');
        $task->group = $request->input('group');
        $task->deadline = $request->input('deadline');
        $task->save();
        return redirect('/admin/dashboard')->with('info','Task Edited Successfully!');
    }
    public function deleteTask($id){
        Baku::where('id',$id)->delete();
        return redirect('/admin/bahan')->with('info','Menu Deleted Successfully!');
    }
}
