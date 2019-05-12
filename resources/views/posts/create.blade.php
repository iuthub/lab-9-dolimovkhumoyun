@extends('layouts.app')


@section('content')
	<h1>Create Post</h1>
	<div class="row">
        <div class="col-md-12">
            <form action="/posts/store" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="content">Body</label>
                    <textarea type="text-area" class="form-control" id="content" name="body"></textarea>
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection