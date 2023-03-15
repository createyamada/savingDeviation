<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Services\ListApi;
use App\Services\ListMetaApi;
use App\Services\DataApi;
use App\Consts\Consts;
use Log;

class RequestController extends Controller
{
    /**
	* 貯金偏差値計算
	* @param  Request request
	* @return $res
	*/
    public function show(Request $request)
    {

        Log::debug($request);

        // // // 入力データをデータベースに登録
        // // DB::table('savings')->insert([
        // //     'age' => $request->age,
        // //     'sex' => $request->sex,
        // //     'residence' => $request->residence,
        // //     'is_marriage' => $request->is_marriage,
        // //     'assets' => $request->assets,
        // //     'annual_income' => $request->annual_income,
        // //     'debt' => $request->debt,
        // // ]);




        // // 統計表データを取得するAPI
        // $list_code = ListApi::getList();

        // // 統計表メタ情報を取得するAPI
        // $age_code = ListMetaApi::getListMeta($list_code , $request->age);

        // // // 統計データを取得するAPI
        // $data = DataApi::getData($list_code , $age_code , $request);
        // Log::debug($data);
        // return $data;
        return view('result');
        
    }



}
