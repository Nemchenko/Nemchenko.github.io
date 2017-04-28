<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\mail\SendMail;
class SendController extends Controller
{
    public function send(request $request)
	{
		Mail::send(new SendMail());
		return view('aftersendmail');
	}
	public function email()
	{
		return view('pages.contact');
	}
}
