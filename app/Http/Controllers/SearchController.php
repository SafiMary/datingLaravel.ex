<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SearchController extends Controller
{
        

    public function search()
    {
        $ageList = ['21','22', '23', '24'];
        $cityList = ['Москва','Екатеринбург', 'Ставрополь', 'Сочи'];
        $sexList = ['М','Ж'];
        return view('search',compact('ageList','cityList','sexList'));
    }
    
//ввод параметров поиска на форме и передача инпута на следующую страницу
    public function searchUser(Request $request){
        $userage = $request->input('age');
        $usercity = $request->input('city');
        $usersex = $request->input('sex');
     
      
        return redirect('/findUsers')->with([
            'userage' =>$request->input('age'),
            'usercity' => $request->input('city'),
            'usersex' => $request->input('sex')
          ]);
    }
   


}
