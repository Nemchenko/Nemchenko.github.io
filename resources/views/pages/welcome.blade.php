@extends('main')

@section('title', '| Homepage')

@section('content')
		<div class="row">
			<div class="col-md-12">
				<div class="jumbotron">
					<h1>Welcome to My Blog!</h1>
					<p class="lead">Thank you so much for visiting. This is my testing website with Laravel! Please, read my popular posts!</p>
					<p><a class="btn btn-primary btn-lg" href="#" role="button">Popular post</a></p>
				</div>
			</div>
		</div> <!-- end of header .row -->
		<div class="row">
			<div class="col-md-8">
				<div class="post">
					<h3>Post Title</h3>
					<p>Lorem ipsum sit amet Lorem ipsum sit amet Lorem ipsum sit amet Lorem ipsum sit amet
					Lorem ipsum sit amet Lorem ipsum sit amet Lorem ipsum sit amet Lorem ipsum sit amet
					</p>
					<a href="" class="btn btn-primary">Read more</a>
				</div>
				
				<hr>
				
				<div class="post">
					<h3>Post Title</h3>
					<p>Lorem ipsum sit amet Lorem ipsum sit amet Lorem ipsum sit amet Lorem ipsum sit amet
					Lorem ipsum sit amet Lorem ipsum sit amet Lorem ipsum sit amet Lorem ipsum sit amet
					</p>
					<a href="" class="btn btn-primary">Read more</a>
				</div>
				
				<hr>
				
				<div class="post">
					<h3>Post Title</h3>
					<p>Lorem ipsum sit amet Lorem ipsum sit amet Lorem ipsum sit amet Lorem ipsum sit amet
					Lorem ipsum sit amet Lorem ipsum sit amet Lorem ipsum sit amet Lorem ipsum sit amet
					</p>
					<a href="" class="btn btn-primary">Read more</a>
				</div>
				
				<hr>
				
				<div class="post">
					<h3>Post Title</h3>
					<p>Lorem ipsum sit amet Lorem ipsum sit amet Lorem ipsum sit amet Lorem ipsum sit amet
					Lorem ipsum sit amet Lorem ipsum sit amet Lorem ipsum sit amet Lorem ipsum sit amet
					</p>
					<a href="" class="btn btn-primary">Read more</a>
				</div>
				
			</div>
			<div class="col-md-3 col-md-offset-1" >
				<h2>Sidebar</h2>
			</div>
		</div>
@endsection		




