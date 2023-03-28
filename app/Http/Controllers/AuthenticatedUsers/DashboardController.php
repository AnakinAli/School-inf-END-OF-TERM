<?php

namespace App\Http\Controllers\AuthenticatedUsers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('authenticated.dashboard', ['users' => $this->getUsers()]);
    }

    public function getUsers()
    {
        return
            DB::table((new User())->getTable())->where(['isAdmin' => true])->get();
    }
}
