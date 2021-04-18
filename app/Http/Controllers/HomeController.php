<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $user = session()->get('user_123');
        $company = $this->company;
        return view('ecommerce', compact('user', 'company'));
    }
}
