@extends('layouts.admin')

@section('content')

<h1>Edit a Post</h1>

    <form method="post" action="{{route('post.update', $post->id)}}" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="form-group">
          <label for="title" class="">Title</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Enter a Title" value="{{$post->title}}">
          </div>

          <div class="form-group">
          <div><img height:"100px" src="{{$post->post_image}}" alt=""></div>
          <input type="file" name="post_image" class="form-control-file" id="post_image">
          </div>

          <div class="form-group">
          <textarea name="body" class="form-control" id="body" cols="30" rows="10">{{$post->body}}</textarea>
          </div>

          <button class="btn btn-primary" type="submit">Update</button>

    </form>



@endsection