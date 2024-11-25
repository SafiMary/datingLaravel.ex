<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class FindUserController extends Controller
{
    //получаем список пользователей, согласно заданным параметрам
    public function view()
    {
        $findUserList =  DB::table('users')
        ->where('age',session()->get('userage'))
               ->where('city',session()->get('usercity'))
               ->where('sex',session()->get('usersex'))
               ->get();

        return view('findUsers',compact('findUserList'));
    }

  



}
