<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function checkout(){
        return view("purchase.checkout");
    }
}
