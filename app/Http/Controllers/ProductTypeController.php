<?php

namespace App\Http\Controllers;

use App\Http\Traits\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    use ProductType;
    public function getRecords($slug, $page){
        return $this->getProductType($slug, $page);
    }
}
