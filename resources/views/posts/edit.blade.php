@extends('layouts.app')


@section('content')
    
	<h1>Create Post</h1>
	<div class="row">
        <div class="col-md-12">
            <form action="{{ route('posts.update', ['id' => $post->id]) }}" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <label for="content">Body</label>
                    <textarea type="text-area" class="form-control" id="content" name="body" >{{$post->body}}</textarea>
                </div>
                {{ csrf_field() }}

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection