@extends('layouts.apps')

@section('body')
	<br>
		<div class="col-md-8">
			<table class="table table-striped table-hover ">
				<thead>
					<tr>
						<th>id</th>
						<th>title</th>
						<th>url</th>
						<th>description</th>
						<th>post</th>
					</tr>
				</thead>
				<tbody>
					<tr class="info">
						<td>{{$item->id}}</td>
						<td>{{$item->title}}</td>
						<td>{{$item->url}}</td>
						<td>{{$item->description}}</td>
						<td>{{$item->body}}</td>
					</tr>  
				</tbody>
			</table> 
		</div>
@endsection