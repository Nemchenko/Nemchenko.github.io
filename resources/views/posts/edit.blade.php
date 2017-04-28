@extends('posts.form')

@section('editId', url('/admin/posts/'.$item->id))

@section('editTitle', $item->title)

@section('editUrl', $item->url)

@section('editDesc', $item->desc)

@section('editPost', $item->body)

@section('editCat', $item->category_id)

@section('editPrew', $item->preview)
@section('addSelected')
	<div class="col-lg-10">
        <select class="form-control" name="name[]" multiple id="tag_list">
			@foreach($tags as $tag)
				@foreach($item->tags as $post)
				<option  value="{{$tag->id}}" {{$post->id == $tag->id ? 'selected' : null}} > {{$tag->name}}</option>
				@endforeach
			@endforeach
		</select>
    </div>
@endsection
@section('addloop')
	@foreach($item->tags as $post)
@endsection
@section('addendloop')
	@endforeach
@endsection
@section('addif')
{{$post->id == $tag->id ? 'selected' : null}}
@endsection
@section('editMethod')
{{method_field('PUT')}}
@endsection