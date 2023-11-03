<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EndUser;
use App\Models\User;
use App\Models\Inspector;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user =Auth::user();
        $users=Inspector::where('user_id','=',$user->id)->get();
        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user=Auth::user();
       
        $users = new Inspector;
        $users->user_id=$user->id;
        $users->date=$request->date;
        $users->subject=$request->sub;
        $users->c_details=$request->details;
        $users->save();
        //return $users;
        return redirect()->route('user.index')->with('message','Complaint added Successfully!');
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
        $users=Inspector::find($id);
        return view('user.edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $users=Inspector::find($id);
        $users->date=$request->date;
        $users->subject=$request->sub;
        $users->c_details=$request->details;
        $users->save();
        return redirect()->route('user.index')->with('message','Updation Successfull!');
    }


     public function remove($id)
    {
        $user = Inspector::find($id);
        $user->delete();
        return redirect()->route('user.index')->with('messages','complaint Deleted!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
