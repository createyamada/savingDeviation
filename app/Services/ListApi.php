<?php

namespace App\Services;


use Illuminate\Support\Facades\Http;
use App\Lib\Common;
use App\Consts\Consts;
use DateTime;
use Log;

class ListApi 
{
    /**
	* e-statの統計表データ取得API
	* @param  $params
	* @return $res 
	*/
    public static function getList() {

        // 日付範囲を取得
        $date = Common::dateToFrom("list");

        // パラメータを作成
        $params = array(
            'appId'             => env('E_STAT_APP_KEY'),
            'statsCode'       => Consts::GOV_STATISTICS_CODE,
            'searchWord'    => "年齢",
            'surveyYears ' => $date,
        );

        // URLエンコード
        $query = http_build_query($params, '', '&', PHP_QUERY_RFC3986);

        // 統計表データを取得するAPIをたたく
        $url = Consts::LIST_GET_URL . $query;
        $res = Http::get($url);

        $array = $res->json();

        // Log::debug($array);

        // if ($params["searchWord"] === "単身世帯") {
        //     $result = "0002190004";
        // } else {
        //     $result = self::familyDataFormat($array);
        // }

        // Log::debug($array);
        $result = self::DataFormat($array);
        return $result;
    }


    private static function DataFormat($array) {
        $datas = $array["GET_STATS_LIST"]["DATALIST_INF"]["TABLE_INF"];
        // Log::debug($datas);

        //　欲しい表番号で抽出ループ
        $result = []; 
        foreach($datas as $data) {
            if ($data["TITLE"]["@no"] === "4-4") {
                if (count($result) === 0) {
                    // 初めはデータを格納する
                    $date = explode('-',$data["SURVEY_DATE"]);
                    $result = array(
                        "code" => $data["@id"],
                        "last_servey" => $date[1],
                    );
                } else {
                    // 2個目以降は調査年月が新しいモノを上書き
                    $date = explode('-',$data["SURVEY_DATE"]);
                    $in_array = new Datetime($result["last_servey"]);
                    $compare = new Datetime($date[1]);

                    if($in_array < $compare) { 
                        $result = array(
                            "code" => $data["@id"],
                            "last_servey" => $date[1],
                        );      
                    }
                }
            }
        }
        return $result["code"];
    }
}