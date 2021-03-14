<?php

namespace App\Http\Controllers;
use App\Http\Traits\Product;

class ProductController extends Controller
{
    use Product;
    public function detail($slug){
        $product = $this->getProductBySlug($slug);
        if ($product["status"]) {
            $company = $this->company;

            $product = $product["data"];
            // return $product;
            return view('product.detail', compact('product', 'company'));
        }

    }
}
