<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\Tag;
use App\Post;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		//$post = Tag::find(1)->posts;
		//$tag = Post::find(2)->tags;
		//return $post;
		$categories = category::all();
        return view('home', compact('categories'));
    }
	 public function sport()
	 {
		$posts = category::find(11)->post;
        return view('category.sport', compact('posts'));
	 }
	 
	 public function politic()
	 {
		$posts = category::find(12)->post;
        return view('category.politic', compact('posts'));
	 }
	 public function culture()
	 {
		$posts = category::find(13)->post;
        return view('category.culture', compact('posts'));
	 }
}
