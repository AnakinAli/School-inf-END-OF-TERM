<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index()
    {
        return view('welcome',['admins'=>User::all(),'address'=>[
            'town'=>'Ruse/Bulgaria'
        ]]);
    }
}
