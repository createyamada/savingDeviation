<?php

namespace App\Services;


use Illuminate\Support\Facades\Http;
use App\Lib\Common;
use App\Consts\Consts;
use Log;

class DataApi 
{
    /**
	* e-statの統計データ取得API
	* @param  String $list_code
	* @param  String $age_code
	* @param  Object $input
	* @return $res 
	*/
    public static function getData($list_code , $age_code , $input) {

        // 日付範囲を取得
        $date = Common::dateToFrom("data");
        // Log::debug('input');
        // Log::debug($input);
        // Log::debug("age_code");
        // Log::debug($age_code);
        // 統計データ取得パラメータ
        $params = array(
            'appId'             => Consts::E_STAT_APP_KEY,
            'statsDataId'       => $list_code,
            'cdCat01'           => $input->is_marriage,
            'cdCat02'           => "0",
            'cdCat03'           => $input->sex,
            'cdCat04'           => "2,21,2132,2134,22,221,4",
            'cdCat05'           => $age_code,
        );

        // Log::debug($params);

        // メモリ上限引き上げ
        ini_set("memory_limit", "200000M");

        // URLエンコード
        $query = http_build_query($params, '', '&', PHP_QUERY_RFC3986);

        // 統計データを取得
        $url = Consts::DATA_GET_URL . $query;
        $res = Http::get($url);

        $array = $res->json();
        // Log::debug($array);



        $labels = $array["GET_STATS_DATA"]["STATISTICAL_DATA"]["CLASS_INF"]["CLASS_OBJ"][4]["CLASS"];
        Log::error($array["GET_STATS_DATA"]["STATISTICAL_DATA"]);

        $datas = $array["GET_STATS_DATA"]["STATISTICAL_DATA"]["DATA_INF"]["VALUE"];

        $result = [];
        // ラベルとデータを紐づけた配列を作る
        foreach( $labels as $label ) {
            // label
            $code = $label["@code"];
            foreach( $datas as $data ) {

                if($code === $data["@cat04"]) {
                    // Log::debug($data);
                    array_push(
                        $result,
                        [
                            "name"  => $label["@name"],
                            "value" => Common::valueFormat($data["$"]),
                        ]
                    );
                }
            }
        }
        return $result;
    }
}