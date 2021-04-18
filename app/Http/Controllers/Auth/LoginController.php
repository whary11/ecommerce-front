<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function register(Request $request){
        $resp = Http::post("http://localhost:4001/api/users/register", $request->all());
        return $resp;
    }

    public function index_register(){
        $company = $this->company;
        return view("auth.register", compact('company'));
    }

    public function index_login(Request $request){
        // $request->session()->put("user_123", ['name' => 'Luis']);
        $company = $this->company;
        return view("auth.login", compact('company'));
    }

    public function login(Request $request){
        $resp = Http::post("http://localhost:4001/api/auth/login", $request->all());

        $request->session()->put("user_123", $resp->json());
        return $resp;
    }
}
