<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


public function uploadAvatar()
{
   // if(request()->hasFile('image')){
     //   $filename=(request()->image->getClientOriginalName());
    
    //request()->image->storeAs('images','$filename','public');
    User::find(1)->update(['avatar'=>'abc']);
    //}
    return redirect()->back();
}


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
}
