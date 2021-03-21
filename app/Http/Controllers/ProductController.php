<?php

namespace App\Http\Controllers;
use App\Http\Traits\Product;
use App\Http\Traits\ProductType;

class ProductController extends Controller
{
    use Product, ProductType;
    public function detail($slug){
        $product = $this->getProductBySlug($slug);
        if ($product["status"]) {
            $company = $this->company;
            $product = $product["data"];
            // return $product;
            return view('product.detail', compact('product', 'company'));
        }
        
        abort(404);
    }
}
