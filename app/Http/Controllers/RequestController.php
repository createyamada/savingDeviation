<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Log;

class RequestController extends Controller
{
 
    public function show(Request $request) {

        Log::debug($request->is_marrige);
           
        if($request->is_marrige === 'あり') {
            $request->is_marrige = 1;
        } else {
            $request->is_marrige = 0;
        }

        
        DB::table('savings')->insert([
            'age' => $request->age,
            'sex' => $request->sex,
            'residence' => $request->residence,
            'is_marrige' => $request->is_marrige,
            'assets' => $request->assets,
            'annual_income' => $request->annual_income,
            'etc_income'=> $request->etc_income,
            'debt' => $request->debt
        ]);
        

        Log::debug( "コントローラーに処理がきたよ");
       
    }

}
