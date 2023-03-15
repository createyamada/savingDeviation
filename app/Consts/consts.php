<?php

namespace App\Consts;

class Consts
{

    // 政府統計コード
    const GOV_STATISTICS_CODE = "00200564";
    
    // 外部API用URL
    // 統計表データ取得API
    const LIST_GET_URL = "http://api.e-stat.go.jp/rest/3.0/app/json/getStatsList?";

    // 統計表メタデータ取得API
    const LISTMETA_GET_URL = "http://api.e-stat.go.jp/rest/3.0/app/json/getMetaInfo?";

    // 統計データ取得API
    const DATA_GET_URL = "http://api.e-stat.go.jp/rest/3.0/app/json/getStatsData?";

    
}