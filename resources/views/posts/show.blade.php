@extends('layouts.apps')

@section('body')
	<br>
		<div class="col-md-10 col-md-offset-1">
		<h1>{{$post->title}}</h1>
		<b>id:</b> {{$post->id}}<br>
		<b>url:</b> {{$post->url}}<br>
		<b>Анонс:</b> <span>{{$post->desc}}</span>
		<br><b>Описание:</b> <span>{{$post->desc}}</span>
		<br><b>Порядковый номер категории:</b> <span>{{$post->category_id}}</span>
		<br><b>Содержание:</b> <p>{{$post->body}}</p>
		<br><span>Опубликована статья: <span class="pull-right">{{$post->created_at}}</span></span>
		@unless($post->tags->isEmpty())
			<h5>Теги к статье:</h5>
			<ol>
				@foreach($post->tags as $tag)
					<li>{{$tag->name}}</li>
				@endforeach
			</ol>
		@endunless
			<div>
			<div class="col-md-8">
				<h3>Комментарии к статье:</h3>
				<ol>
					@foreach($comments as $comment)
					<li style="background-color: #faf; margin: 5px; padding:5px"><b>От автора:</b> {{$comment->author}}<br><b>Email:</b> {{$comment->email}}<br><b>Сообщение:</b><p>{{$comment->content}}</p></li>
					@endforeach
				</ol>
			</div>
			@include('commentform')
		</div>
@endsection