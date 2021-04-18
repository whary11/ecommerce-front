<?php
namespace App\Http\Traits;

use Illuminate\Support\Facades\Http;

trait UserInfo{
    public function getInfo(){
        $token = session()->get("user_123");
        if(isset($token)){
            $resp = Http::withToken($token['token'])->get("http://localhost:4001/api/users/get_info");
            if (isset($resp['email'])) {
                session()->put("user_info", (Object) $resp->json());
                return $resp;
            }
            return $resp;
        }
        return [
            'status' => false
        ];
    }

    public function getTokenUser(){
        $token = session()->get("user_123");
        if(isset($token)){
            return $token['token'];
        }
        return null;
    }
}