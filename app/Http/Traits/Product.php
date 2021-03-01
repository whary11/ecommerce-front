<?php
namespace App\Http\Traits;

use Illuminate\Support\Facades\Http;

trait Product{
    use HttpRequestTrait;
    public function getProductBySlug($slug){
        $resp = $this->get("/product_detail/$slug");
        return $resp;
    }
}