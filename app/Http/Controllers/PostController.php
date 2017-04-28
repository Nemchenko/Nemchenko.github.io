<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$posts = Post::all();
        return view('posts.home', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$tags = Tag::all();
        return view('posts.create', ['tags' => $tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
		$this->validate($request, [
			'title' => 'required|unique:posts',
			'url'   => 'required|unique:posts',
			'desc'   => 'required',
			'body'   => 'required',
			'preview'   => 'required',
		]);
		$post->title = $request->title;
		$post->url = $request->url;
		$post->desc = $request->desc;
		$post->body = $request->body;
		$post->category_id = $request->category_id;
		$post->preview = $request->preview;
		$post->save();
		$post->tags()->attach($request->name);
		return redirect('admin/posts');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
		$comments = Post::find($id)->comments;
		return view('posts.show', ['post' => $post, 'comments' => $comments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$tags = Tag::all();
		$item = Post::find($id);
        return view('posts.edit', ['tags' => $tags, 'item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
		$this->validate($request, [
			'title' => 'required',
			'url'   => 'required',
			'desc'   => 'required',
			'body'   => 'required',
			'preview'   => 'required',
		]);
		$post->title = $request->title;
		$post->url = $request->url;
		$post->desc = $request->desc;
		$post->body = $request->body;
		$post->category_id = $request->category_id;
		$post->preview = $request->preview;
		$post->tags()->sync($request->name);
		$post->save();
		session()->flash('message', 'Updated Successfully!');
		return redirect('admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $post = Post::find($id);
	   $post->delete();
	   session()->flash('message', 'Deleted Successfully!');
	   return redirect('admin/posts');
    }
}
