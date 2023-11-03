<?php

namespace App\Http\Controllers;


use App\Models\Sale;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }



    public function profile()
    {
        $users=Auth::user();
       // return $users;
        return view('profile',compact('users'));
    }


    public function update(Request $request)
    {
    
        $users=Auth::user();
        $users->name=$request->name;
        $users->email=$request->email;
        $users->address=$request->address;
        $users->contact_no=$request->contactno;
        $users->details=$request->details;

        if($request->hasfile('image'))
        {
                     
           $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,svg|max:15'
            ]);
            $file = $request->file('image');
            $exten = $file->getClientOriginalExtension();
            $filename = time().".".$exten;
            $request->image->move(public_path('images'),  $filename);
            $users->image = $filename;
           }
        // return $users;
        $users->save();
       
        return redirect()->route('profile')->with('message','Updation Successfull!');

    }


    

}
