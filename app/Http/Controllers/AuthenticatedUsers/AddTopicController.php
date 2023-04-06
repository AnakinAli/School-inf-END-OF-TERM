<?php

namespace App\Http\Controllers\AuthenticatedUsers;

use App\Http\Controllers\Controller;
use App\Models\Info;
use App\Models\Topic;
use App\Models\User;
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

    public function getAllTopics()
    {
        return view('show_topics', ['topics' => Topic::select('topic_name', 'id')->get()]);
    }

    public function get_topic($id, Request $request)
    {
        $publications = Info::where('topic_id', $id)->get();

        $data = [];
        foreach ($publications as $pub) {
            array_push($data, [
                'message' => $pub->info,
                'author' => User::where('id', $pub->admin_id)->first()->name
            ]);
        }

        return view('show_publications', ['publications' => $data]);
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
