<?php

namespace App\Http\Controllers;

use App\Models\UserAddress;
use Illuminate\Http\Request;


class UserAddressController extends Controller
{



    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\UserAddress
     */

    protected function create(Request $request)
    {

      UserAddress::create($request->input());
        return redirect()->route('home');
    }


}
