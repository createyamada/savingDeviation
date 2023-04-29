<?php

namespace App\Services;


use Illuminate\Support\Facades\Http;
use App\Lib\Common;
use App\Consts\Consts;
use Log;

class ListMetaApi 
{
    /**
	* e-statの統計データ取得API
	* @param  String statsDataId
	* @param  String age
	* @return $res 年度のコード
	*/
    public static function getListMeta($list_code , $age) {

        // 日付範囲を取得
        $date = Common::dateToFrom("non");

        // 統計データ取得パラメータ
        $params = array(
            'appId'             => Consts::E_STAT_APP_KEY,
            'statsDataId'       => $list_code,
        );

        // URLエンコード
        $query = http_build_query($params, '', '&', PHP_QUERY_RFC3986);

        // 統計データを取得
        $url = Consts::LISTMETA_GET_URL . $query;
        $res = Http::get($url);

        $json = $res->json();
        // Log::debug('表示');
        // Log::debug($json);

        // 年代の最後（最新を取得）
        // $max = count($json["GET_META_INFO"]["METADATA_INF"]["CLASS_INF"]["CLASS_OBJ"][6]["CLASS"]) -1;
        // $year = $json["GET_META_INFO"]["METADATA_INF"]["CLASS_INF"]["CLASS_OBJ"][6]["CLASS"][$max]["@code"];

        // 選択した年齢年代の情報を取得
        // if($list_data  === "0002190004") {
        //     $index = self::getIndexSingle($age);
        // } else {
        //     $index = self::getIndexFamily($age);
        // }

        $index = self::getIndex($age);

        $generation = $json["GET_META_INFO"]["METADATA_INF"]["CLASS_INF"]["CLASS_OBJ"][5]["CLASS"][$index]["@code"];


        $result = [
            'statsDataId' => $list_code,
            // 'year' => $year,
            'age'  => $generation,
        ];
        // Log::debug($result);
        return $result["age"];
    }

    /**
	* 年代のインデックスを返す
	* @param  String age
	* @return int index
	*/
    private static function getIndex($age) {
        $index = 0;
        // Log::debug($age);
        switch ((int)$age) {
            // 29歳以下
            case $age < 30:
                $index = 1;
                break;
            // 30-35歳
            case 30 >= $age && $age < 35 :
                $index = 2;
                break;
            // 35-39歳
            case 35 >= $age && $age < 40 :
                $index = 3;
                break;
            // 40-44歳
            case 40 >= $age && $age < 45 :
                $index = 4;
                break;
            // 45-49歳
            case 45 >= $age && $age < 50 :
                $index = 5;
                break;
            // 50-54歳
            case 50 >= $age && $age < 55 :
                $index = 6;
                break;
            // 55-59歳
            case 55 >= $age && $age < 60 :
                $index = 7;
                break;
            // 60-64歳
            case 60 >= $age && $age < 65 :
                $index = 8;
                break;
            // 65-69歳
            case 65 >= $age && $age < 70 :
                $index = 9;
                break;
            // 70-74歳
            case 70 >= $age && $age < 75 :
                $index = 10;
                break;
            // 75-80歳
            case 75 >= $age && $age < 80 :
                $index = 11;
                break;
            // 80-84歳
            case 80 >= $age && $age < 85 :
                $index = 12;
                break;
            // 85歳以上
            case $age >= 85 :
                $index = 13;
                break;

            default:
                break;
        }
        return $index;
    }
}