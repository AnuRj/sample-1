<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inspector;
use App\Models\User;
use Auth;

class InspectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=Auth::user();
        $inspectors = Inspector::join('users','inspectors.user_id','=','users.id')
                     ->where('inspector','=',$user->name)->get();
                    // return $inspectors;
        return view('inspector.index',compact('inspectors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       

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
    public function edit(string $id)
    {
        $inspector=Inspector::find($id);
        return view('inspector.create',compact('inspector'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=Inspector::find($id);
        $data->f_date=$request->date;
        $data->feedback=$request->fb;
        $data->save();
        return redirect()->route('inspector.index')->with('message','Feedback added Successfully!');
    }
    

    Public function complaintview($id)
    {
        $complaint=Inspector::join('users','user_id','=','users.id')->find($id);
        return view('inspector.complaintview',compact('complaint'));

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
