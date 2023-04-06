<?php

namespace App\Http\Controllers\AuthenticatedUsers;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AddTopicController extends Controller
{
    //
    public function index()
    {
        return view('authenticated.add_topic');
    }

    public function addTopic(Request $request)
    {
        $topic = htmlspecialchars(trim($request['topic']));
        if (!Topic::where('topic_name', $topic)->exists()) {

            Topic::create(
                [
                    'topic_name' => $topic,
                    'admin_id' => Auth::user()->id
                ]
            );
            return redirect()->back()->with(['status' => 'Topic: ' . $topic . ' added successfully']);

        }
        return redirect()->back()->withErrors(['a']);
    }
}
