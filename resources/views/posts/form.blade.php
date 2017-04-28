@extends('layouts.apps')

@section('body')
<br>

	<a href="/admin/posts" class="btn btn-info">Back</a>
	<div class="col-md-4 col-md-offset-4">
		<h1>{{substr(Route::currentRouteName(), 6)}} Post</h1>
		<form action="@yield('editId', url('/admin/posts'))" method="post">
		{{csrf_field()}}
		@section('editMethod')
			@show
		<fieldset>
    <div class="form-group">
      <div class="col-lg-10">
	   <label for="inputTitle" class="col-lg-2 control-label">Title</label>
        <input class="form-control" id="inputTitle" placeholder="Title" name="title" type="text" value="@yield('editTitle')">
      </div>
    </div>
    <div class="form-group">
      <label for="inputUrl" class="col-lg-2 control-label">Url</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputUrl" placeholder="url" type="text" name="url" value="@yield('editUrl')">
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Description</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea" name="desc">@yield('editDesc')</textarea>
      </div>
    </div>
	<div class="form-group">
      <label for="textArea1" class="col-lg-2 control-label">Post</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="6" id="textArea1" name="body">@yield('editPost')</textarea>
      </div>
    </div>
	<div class="form-group">
      <label for="inputId" class="col-lg-2 control-label">Category_Id</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputId" placeholder="Category number" name="category_id" type="number" value="@yield('editCat')">
      </div>
    </div>
	<div class="form-group">
      <label for="textPreview" class="col-lg-2 control-label">Preview</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textPreview" name="preview">@yield('editPrew')</textarea>
      </div>
    </div>
	<div class="form-group">
      <label for="tag_list" class="col-lg-2 control-label">Tags</label>
	  @yield('addSelected')
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
	@section('footer')
		<script>
			$('#tag_list').select2();
		</script>
	@endsection
	@include('posts.partials.errors')
	</div>
@endsection