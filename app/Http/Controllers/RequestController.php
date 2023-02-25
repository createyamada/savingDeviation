<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Log;

class RequestController extends Controller
{
 
    public function show(Request $request) {

        Log::debug($request);
        
        DB::table('savings')->insert([
            'id'=>20,
            'age' =>23,
            'sex' =>2,
            'residence' => 'panama',
            'is_marrige' => 1,
            'assets' => '200',
            'annual_income' => '200',
            'etc_income'=>'800',
            'debt' =>'99'
        ]);

        // $temp = DB::table('savings')->selec()->get();

        // Log::debug($temp);

        

        Log::debug( "コントローラーに処理がきたよ");
        return "ちんちん";
    }
}
