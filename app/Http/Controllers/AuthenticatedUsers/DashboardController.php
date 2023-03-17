<?php

namespace App\Http\Controllers\AuthenticatedUsers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('dashboard',['users'=>$this->getUsers()]);
    }

    public function getUsers()
    {
        return User::all();
    }
}
