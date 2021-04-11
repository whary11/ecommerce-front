<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PurchaseController extends Controller
{
    public function checkout(){
        $company = $this->company;
        $date_after_delivery = Carbon::now()->addDays($company["days_after_delivery"])->toDateString();
        return view("purchase.checkout", compact('company', 'date_after_delivery'));
    }



    public function create(Request $request){
        $resp = Http::post("http://localhost:4001/api/purchase/create", $request->all());
        return $resp;
    }


    public function responseEpaycode(Request $request){
        dd($request->all());
        // return Http::get("https://secure.epayco.co/validation/v1/reference/ + ref_payco");
    }
}
