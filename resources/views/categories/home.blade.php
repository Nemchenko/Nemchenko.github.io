@extends('layouts.apps')

@section('body')
	<br>
	<a href="categories/create" class="btn btn-info">Add new</a>
	<div class="col-md-6 col-md-offset-3">
		@include('categories.partials.message')
		<center><h1>List of categories</h1></center>
		<ul class="list-group col-md-8">
		@foreach($categories as $category)
			<li class="list-group-item">
			<span>{{$category->id}}</span>
			<a href="{{'/admin/categories/'.$category->id}}">{{$category->title}}</a>
			<span class="pull-right">{{$category->created_at->diffforHumans()}}</span>
			</li>
		@endforeach	
		</ul>
		<ul class="list-group col-md-4">
		@foreach($categories as $category)
			<li class="list-group-item">
			<a href="{{'/admin/categories/'.$category->id.'/edit'}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
			<form class="form-group pull-right" action="{{'/admin/categories/'.$category->id}}" method="post">
				{{csrf_field()}}
				{{method_field('DELETE')}}
				<button type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
			</form>
			</li>
		@endforeach	
		</ul>
	</div>
@endsection