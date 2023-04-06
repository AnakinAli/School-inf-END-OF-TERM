<?php

namespace App\Http\Controllers\AuthenticatedUsers;

use App\Http\Controllers\Controller;
use App\Models\Info;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddPublicationController extends Controller
{
    //
    public function index()
    {
        return view('authenticated.add_publication',['topics'=>Topic::select('topic_name','id')->get()]);
    }

    public function addPublication(Request $request)
    {
        $topic_id=htmlspecialchars(trim($request->topic_id));
        $info=htmlspecialchars(trim($request->message));

        Info::create([
            'admin_id'=>Auth::user()->id,
            'topic_id'=>$topic_id,
            'info'=>$info
        ]);
        return redirect()->back()->with(['status'=>'Publication added successfully']);
    }
}
