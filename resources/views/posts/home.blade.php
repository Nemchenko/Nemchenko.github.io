@extends('layouts.apps')

@section('body')
	<br>
	<div class="col-md-4 col-md-offset-4">@include('posts.partials.message')</div>
	<a href="posts/create" class="btn btn-info" style="margin-left: 600px;">Add new</a>
	<div class="col-md-10 col-md-offset-1">
		<h1>List of Post Items</h1>
		<ul class="list-group col-md-6">
			@foreach($posts as $post)
			<li class="list-group-item">
			<a href="{{'/admin/posts/'.$post->id}}">{{$post->title}}</a>
			<span class="pull-right">{{$post->created_at->diffforHumans()}}</span>
			</li>
			@endforeach
		</ul>
		<ul class="list-group col-md-2">
			@foreach($posts as $post)
			<li class="list-group-item">
			<a href="{{'/admin/posts/'.$post->id.'/edit'}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
</a>
			<form class="form-group pull-right" action="{{'/admin/posts/'.$post->id}}" method="post">
				{{csrf_field()}}
				{{method_field('DELETE')}}
				<button type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i>
</button>
			</form>
			</li>
			@endforeach
		</ul>
	</div>
@endsection