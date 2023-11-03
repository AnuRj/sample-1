<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Inspector;
use App\Models\User;
use Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // $inspector=User::where('roll','=','3')->get();
        $admin=User::join('inspectors','id','=','inspectors.user_id')->get();
        return view('admin.index',compact('admin'));
    }

     /**
     * Display inspector list.
     */

    public function inspectorview()
    {
        $admin=User::where('roll','=','3')->get();
        return view('admin.inspectorview',compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store new inpectors account data in storage.
     */
    public function store(Request $request)
    {
        $user=Auth::user();
       
        $users = new User;
        $users->name=$request->name;
        $users->address=$request->address;
        $users->email=$request->email;
        $users->contact_no=$request->cno;
        $users->job_position=$request->jp;
        $users->password=$request->password;
        $users->roll=3;
        $users->save();
        //return $users;
        return redirect()->route('inspector-view')->with('message','creation Successfull!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.edit',compact('users'));  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $users = User::find($id);
        $users->name=$request->name;
        $users->address=$request->address;
        $users->email=$request->email;
        $users->contact_no=$request->cno;
        $users->job_position=$request->jp;
        $users->password=$request->password;
        $users->save();
        //return $users;
        return redirect()->route('inspector-view')->with('message','Updation Successfull!');
    }

    public function accept($id)
    {
        $inspectors=User::where('roll','=','3')->get();
        $users = Inspector::join('users','user_id','=','users.id')->find($id);
        return view('admin.assign',compact('users','inspectors'));
    }

    public function reject($id)
    {
        $users = Inspector::find($id);
        $users->status ='Rejected';
        $users->save();
        return redirect()->route('admin.index');
    }

    public function inspectorDetails(Request $request)
    {
       $user = User::find($request->id);
       return $user;
       
    }


    /**
     * 
     */
    public function assignInspector(Request $request,$id)
    {
       
        $users = Inspector::find($id);
        $users->status='Accepted';
        $users->inspector=$request->inspector;
        $users->save();
      //  return $users;
        return redirect()->route('admin.index')->with('message','assigned inspector Successfully!');
    }

    public function feedback($id)
    {
        $feedback= Inspector::join('users','users.id','=','user_id')->find($id);
        //return $feedbacks;
        return view('admin.feedbackview',compact('feedback'));
    }



    public function remove($id)
    {
        $user = user::find($id);
        $user->delete();
        return redirect()->route('inspector-view')->with('delete','deletion Successfull!');
    }

    public function inspectorList()
    {
        $inspectors=User::where('roll','=','3')->get();
        return view('admin.inspectordetails',compact('inspectors'));
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
