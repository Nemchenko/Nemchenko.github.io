<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\category;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$categories = category::all();
        return view('categories.home', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$category = new category();
		$this->validate($request, [
			'title' => 'required|unique:categories',
			'url' => 'required|unique:categories',
			'description' => 'required',
			'body' => 'required',
		]);
        $category->title = $request->title;
		$category->url = $request->url;
		$category->description = $request->description;
		$category->body = $request->body;
		$category->save();
		return redirect('admin/categories');
		
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$item = category::find($id);
        return view('categories.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$item = category::find($id);
        return view('categories.edit', compact('item'));
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
        $category = category::find($id);
		$this->validate($request, [
			'title' => 'required',
			'url' => 'required',
			'description' => 'required',
			'body' => 'required',
		]);
        $category->title = $request->title;
		$category->url = $request->url;
		$category->description = $request->description;
		$category->body = $request->body;
		$category->save();
        session()->flash('message', 'Updated Successfully');
		return redirect('admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = category::find($id);
        $item->delete();
        return redirect('admin/categories');
    }
}
