<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function checkout(){

        $company = $this->company;
        $date_after_delivery = Carbon::now()->addDays($company["days_after_delivery"])->toDateString();


        return view("purchase.checkout", compact('company', 'date_after_delivery'));
    }
}
