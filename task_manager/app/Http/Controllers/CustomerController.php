<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create(Request $request)
    {
        echo $request->name.", ".$request->phone.", ".$request->email;
    }
    public function getCustomerById($id)
    {
        switch ($id){
            case 1:
                $customer = [
                    "name"=>"Nguyễn Văn A",
                    "phone"=>"01234567890",
                    "email"=>"email.test@mail.com"
                ];
                return $customer;
            case 2:
                $customer = [
                    "name"=>"Nguyễn Văn B",
                    "phone"=>"01234567890",
                    "email"=>"email.test@mail.com"
                ];
                return $customer;
            case 3:
                $customer = [
                    "name"=>"Nguyễn Văn C",
                    "phone"=>"01234567890",
                    "email"=>"email.test@mail.com"
                ];
                return $customer;
            case 4:
                $customer = [
                    "name"=>"Nguyễn Văn D",
                    "phone"=>"01234567890",
                    "email"=>"email.test@mail.com"
                ];
                return $customer;
            case 5:
                $customer = [
                    "name"=>"Nguyễn Văn E",
                    "phone"=>"01234567890",
                    "email"=>"email.test@mail.com"
                ];
                return $customer;
        }
    }

    public function detail($id)
    {
       $customer = $this->getCustomerById($id);
       return view('modules.customer.detail', compact('customer'));
    }

    public function showEdit($id)
    {
        $customer = $this->getCustomerById($id);
        return view('modules.customer.edit',compact('customer'));
    }
    public function update()
    {

    }
}
