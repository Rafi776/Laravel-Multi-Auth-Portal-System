<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSessionData(Request $request){
        if($request->session()->has('key')){
            return$request->session()->get('key');
        }else{
            return 'Session has no value';
        }
    }

    public function storeSessionData(Request $request){
        $request->session()->put('key', 'pmitf');
        return 'Value Successfully Added to the Session';
    }

    public function destroySessionData(Request $request){
        $request->session()->forget('key');
        return 'Session Value Succefully Destroyed';
    }
}
