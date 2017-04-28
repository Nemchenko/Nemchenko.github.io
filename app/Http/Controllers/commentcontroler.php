<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class commentcontroler extends Controller
{
	public function index()
	{
    $messages = Message::all();
	return view('commentform', compact('messages'));
	}
	public function save(Request $request, $id)
	{
		$message = new Message();
		$message->author = $request->name;
		$message->email = $request->email;
		$message->content = $request->message;
		$message['post_id'] = $id;
		$message->save();
		return back();
	}
	1
}
