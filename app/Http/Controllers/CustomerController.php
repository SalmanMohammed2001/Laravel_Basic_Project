<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller{
    //
    public function customers(){
        $customerList=Customer::all();
        return view('customer.customer',['customers'=>$customerList]);
    }

    public function new(){
        return view('customer.newCustomer');
    }
    public function add(Request $request){
        $customer=$request->validate([
            'name'=>'required',
            'addresss'=>'required',
            'desigination'=>'required',
            'age'=>'required',
        ]);

        $saveData=Customer::create($customer);
        return redirect(route('customers.customer'));
    }

    public function modify(Customer $customer){
        $customerList=Customer::all();
        return view('customer.modify',['customer'=>$customer]);
    }

    public function update(Customer $customer,Request $request){
        $createCustomer=$request->validate([
            'name'=>'required',
            'addresss'=>'required',
            'desigination'=>'required',
            'age'=>'required',
        ]);

        $customer->update($createCustomer);
        return redirect(route('customers.customer'));
    }

    public function delete(Customer $customer){
        $customer->delete(); // Delete the customer
        return redirect(route('customers.customer'));
    }


}
