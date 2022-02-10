<?php

namespace App\Http\Controllers\Admin;

use App\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function registered()
    {
        $users = User::all();
        return view('admin.register')->with('users', $users);
    }

    public function Edit($cat_id){
        $user = User::find($cat_id);
        return view('admin.edit', compact('user')); 
    }
}
