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
        $resp = Http::withToken('eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOjQsImp0aSI6ImIwNjU1YjM0LTU5YTctNGIzNi04YTIyLTc4OTQxYmNlMzRkYSIsImV4cCI6MTYxNjM3MTAxNiwiaXNzIjoiS2VueSJ9.loaDsW9-cF-KUkFN8UvScoAdwok-3QF47gUWu3vovRoNrDHgAjHu4Yeneedzcqo0qfSBq9atvxQ4pm1D8lhAmybbrD02wLx6AWWBetp5Nip2OaaRJuXRZuJCjdgQRV1b9gdIw0GkP-SplUe_Y6eEkRG5fuGYRiU_U0X6W__ShA7mIN0kHFkWIsCx_Rx9MplR2NhbFudbS7Z97u-aR7Wfcgx6tN21tYBQlRqZb_w-LEwetugs4RtefoGn0gK3_A1gbtWIZp9ltS8NrFYHy24SDWgwSIs8huTck8WJzqmH1xoUr8u-uYE5xSpykp9cyj22zNUHNHj8BBeH2XOIzE5RJQ')->post("http://localhost:4001/api/purchase/create", $request->all());
        return $resp;
    }
}
