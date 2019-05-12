@extends('layouts.app')


@section('content')
	<a href="/posts" class="btn btn-default">Go Back</a>
	<h1>{{$post->title}}</h1>
	<hr>
	<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
	<hr>
	<div>
		{{$post->body}}
	</div>
	
	<a href="/posts/edit/{{ $post->id }}" class="btn btn-primary">Edit</a>
		<a href="{{ route('posts.destroy', ['id' => $post->id]) }}" class="btn btn-danger">Delete</a>
@endsection