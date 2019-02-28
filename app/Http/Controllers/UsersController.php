<?php

namespace App\Http\Controllers;


use App\Services\UsersService;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->uService = new UsersService();
    }


    public function index( Request $request)
    {
        return $this->uService->index($request->input());


    }

    public function getUserGroups( )
    {
        return $this->uService->getUserGroups();

    }

    public function getUsers( )
    {
        return $this->uService->getUsers();

    }
}
