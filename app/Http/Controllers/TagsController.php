<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Post;
class TagsController extends Controller
{
    public function index()
	{
		$posts = Tag::find(1)->posts;
		return view('tags', compact('posts'));
	}
}
