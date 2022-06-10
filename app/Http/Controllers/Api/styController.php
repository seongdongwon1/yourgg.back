<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class styController
{
    public function getUserInfo (Request $request)
    {
        $summoner_name = urlencode($request->id);
        $api_key = config('api.key');
        $url = config('api.url').'lol/summoner/v4/summoners/by-name/'.$summoner_name.'?api_key='.$api_key;
        $response = Http::get($url);

        if($response->getStatusCode() === 200) {
            return $response->json();
        } else if ($response->getStatusCode() === 403){
            return 'api키 만료';
        } else {
            return '소환사명을 제대로 입력해주세요.';
        }
    }
}

//        // 티어정보
////      $url = $basic_url.'lol/league/v4/entries/by-summoner/'.$result['id'].'?api_key='.$api_key;

