<?php

namespace App\Http\Controllers;


use App\Models\UserPaymentInformation;
use Illuminate\Http\Request;


class UserPaymentInformationController extends Controller
{


    /**
     * Create a new user instance after a valid registration.
     *
     * @param Request $request
     */

    protected function create(Request $request)
    {
     UserPaymentInformation::create($request->input());
     return redirect()->route('home');

    }
}
