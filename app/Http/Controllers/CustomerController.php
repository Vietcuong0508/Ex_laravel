<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function register()
    {
        return view('customer.register');
    }

    public function processRegister(Request $request)
    {
        $name = $request->get('name');
        $password = $request->get('password');
        $birthday = $request->get('birthday');
        $phone = $request->get('phone');
        $address = $request->get('address');
        return view('customer.registerSuccess', ['name' => $name,
            'password' => $password,
            'birthday' => $birthday,
            'phone' => $phone,
            'address' => $address
        ]);
    }
}
