<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MainController extends Controller
{
    public function home(){
        $user_list = User::paginate(10);
        return view('home',compact('user_list'));
    }
}
