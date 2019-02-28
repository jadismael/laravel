<?php

namespace App\Http\Controllers;


use App\Services\UsersService;
use Illuminate\Http\Request;

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
        $this->uService = new UsersService();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $aLogins = $this->uService->index($request->input());
        $aUsers = $this->uService->getUsers();
        $aGroups = $this->uService->getUserGroups();
        return view('home', compact('aLogins', 'aUsers', 'aGroups'));
    }

}
