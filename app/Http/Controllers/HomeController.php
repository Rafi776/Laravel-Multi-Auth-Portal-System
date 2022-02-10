<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


public function uploadAvatar()
{
    if(request()->hasFile('image')){
        $filename=(request()->image->getClientOriginalName());
    
        $this->deleteOldImage();
    request()->image->storeAs('images',$filename,'public');
    auth()->user()->update(['avatar'=>$filename]);
    }
    return redirect()->back();
}


    protected function deleteOldImage()
    {
        if(auth()->user()->avatar){
           
            \Storage::delete('/public/images/' .auth()->user()->avatar);
        }
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

    public function team()
    {
        $users = User::all();
        return view('teammembers')->with('users', $users);
    }

    public function profile()
    {
        $users = User::all();
        return view('profile')->with('users', $users);
    }
}
