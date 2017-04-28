
@foreach($posts as $post)

@if(substr(URL::current(), 12) == $post->url)
<p>{{$post->title}}</p>
<p>{{$post->body}}</p>

@endif

@endforeach


