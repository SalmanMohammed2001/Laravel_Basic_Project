<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller{
    //
    public function customers(){
        return view('customer.customer');
    }
}
