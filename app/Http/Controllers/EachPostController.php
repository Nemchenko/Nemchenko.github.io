<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\Post;
class EachPostController extends Controller
{
    public function getPage()
	{
		$posts = category::find(11)->post;
		return view('pages', compact('posts'));
	}
}
