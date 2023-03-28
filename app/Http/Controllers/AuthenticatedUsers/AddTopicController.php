<?php

namespace App\Http\Controllers\AuthenticatedUsers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddTopicController extends Controller
{
    //
    public function index()
    {
        return view('authenticated.add_topic');
    }
}
