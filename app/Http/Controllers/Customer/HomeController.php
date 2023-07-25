<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
    
    public function index(Request $request){
        
        $customer = $request->user('customer');
        $customer->load(['avatar','agreemant','reference']);

       

        return view('customer.home',compact('customer'));
    }
}
