<?php

namespace App\Http\Controllers;


use App\Models\UserPaymentInformation;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class UserPaymentInformationController extends Controller
{


    /**
     * Create a new user PaymentInformation after a valid registration.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    protected function create(Request $request)
    {
     UserPaymentInformation::create($request->input());
     return redirect()->route('home');

    }
}
