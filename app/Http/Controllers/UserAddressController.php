<?php

namespace App\Http\Controllers;

use App\Models\UserAddress;
use Illuminate\Http\Request;


class UserAddressController extends Controller
{



    /**
     * Create a new user address after a valid registration.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */

    protected function create(Request $request)
    {
      UserAddress::create($request->input());
        return redirect()->route('home');
    }


}
