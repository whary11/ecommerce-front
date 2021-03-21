<?php
namespace App\Http\Traits;

use Illuminate\Support\Facades\Http;

trait ProductType{
    use HttpRequestTrait;
    public function getProductType($slug, $page = 1){
        
        $resp = $this->get("/product/types/$slug/$page");
        return $resp;
    }
}