<?php
namespace App\Http\Traits;

use Illuminate\Support\Facades\Http;

trait HttpRequestTrait{
    public $base_url = "http://localhost:4010/api";
    public function get($url){
        try {
            $resp = Http::get($this->base_url.$url);
            // dd($resp);
            return $resp;
        } catch (\Throwable $th) {
            return [
                "status" => false,
                "message" => $th->getMessage()
            ];
        }
    }


    
}