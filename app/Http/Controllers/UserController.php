<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class UserController extends Controller
{
    public function mycabinet()
{
    $user = Auth::user();
    return view('mycabinet',compact('user'));
}


public function update_avatar(Request $request){

    $request->validate([
        'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $user = Auth::user();

    $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();
    $path =$request->avatar->storeAs('',$avatarName,'public');//ничего тут не менять
    $user->avatar = $avatarName;
    $user->save();

    return view('mycabinet',compact('path','user'));

}


public function getUserId(Request $request)
{
    $user = Auth::user(); 
    $id = Auth::id(); 

    
    $user = $request->user(); 
    $id = $request->user()->id; 

    
    $user = auth()->user(); 
    $id = auth()->id();  
}

}