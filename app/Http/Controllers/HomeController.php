<?php

namespace App\Http\Controllers;

use App\Models\UserLogin;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $aLogins = UserLogin::with('user')
                                    ->orderBy('date', 'ASC')
                                    ->get()->toArray();

        return view('home', compact('aLogins'));
    }

}
