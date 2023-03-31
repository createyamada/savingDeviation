<?php

namespace App\Services;


use App\Lib\Common;
use App\Consts\Consts;
use Log;

class CalcDev 
{
    /**
	* 貯金偏差値を計算
	* @param  Int $age
	* @param  Int $saving
	* @param  Object $datas
	* @return $res 
	*/
    public static function calc($age , $saving , $datas) {

        $standard_deviation = 0;
        // 年齢に応じた標準偏差を取得
        switch($age) {
            // 二十代
            case $age < 30:
                Log::debug("二十代");
                $standard_deviation = Consts::TWENTIES;
                break;
            // 三十代
            case 30 >= $age && $age < 40 :
                Log::debug("三十代");
                $standard_deviation = Consts::THIRTIES;
                break;
            // 四十代
            case 40 >= $age && $age < 50 :
                Log::debug("四十代");
                $standard_deviation = Consts::FORTIES;
                break;
            // 五十代
            case 50 >= $age && $age < 60 :
                Log::debug("五十代");

                $standard_deviation = Consts::FIFTIES;
                break;
            case 60 >= $age && $age < 70 :
                Log::debug("六十代");

                $standard_deviation = Consts::SIXTIES;
                break;
            // 六十代
            case $age >= 70 :
                Log::debug("七十代");
                $standard_deviation = Consts::SEVENTIES;
                break;

            default:
                break;
        }

        // 偏差値の式に代入
        // ※偏差値式（個人の得点ー平均点）÷標準偏差×10＋50

        Log::debug("出力地");
        Log::debug($datas[1]["value"]);
        $average = preg_replace("/[^0-9]/", "", $datas[1]["value"]);
        Log::debug('saving');
        Log::debug($saving);
        Log::debug('average');
        Log::debug($average);
        Log::debug('resaving');
        Log::debug($saving / 1000);
        Log::debug('average');
        Log::debug($average/ 10000);
        $result = round(($saving / 10 - $average / 100) / ($standard_deviation / 20) * 10 + 50); 
        return $result;
    }
}
