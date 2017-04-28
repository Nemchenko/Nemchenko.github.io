@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Список постов о политике:</div>
                <div class="panel-body">
					@foreach($posts as $post)
					<a href="show/{{$post->id}}">{{$post->title}}</a><br>
					@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection