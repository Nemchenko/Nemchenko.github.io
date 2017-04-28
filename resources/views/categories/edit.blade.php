@extends('categories.create')

@section('editId', url('/admin/categories/'.$item->id))

@section('editTitle', $item->title)

@section('editUrl', $item->url)

@section('editDescription', $item->description)

@section('editPost', $item->post)

@section('editTime', $item->created_at)

@section('editMethod')
	{{method_field('PUT')}}
@endsection
