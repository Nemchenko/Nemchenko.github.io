@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                    You are logged in as <strong>Admin</strong>!
					<br><br>
					<p class="alert alert-danger">This dashboard is for people who created and modefied datas! 
					Be careful for changing! You are responsible for it!</p>
					<strong><p>Items for admins:</p></strong>
					<p><a href="/admin/categories" >Categories</a></p>
					<p><a href="/admin/posts" >Posts</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
