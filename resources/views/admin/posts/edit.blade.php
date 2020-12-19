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
          <div><img height="500px" src="{{$post->post_image}}" alt=""></div>
          <input type="file" name="post_image" style="margin-top: 12px;" class="form-control-file" id="post_image">
          </div>

          <div class="form-group">
            <label for="category_id" class="">Category</label>
            <select name="category_id" class="form-control" id="category_id">
              <option value="{{$post->category_id}}" selected disabled hidden>{{$post->category->name}}</option>
              @foreach($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
           </select>
          </div>

          <div class="form-group">
          <textarea name="body" class="form-control" id="body" cols="30" rows="10">{{$post->body}}</textarea>
          </div>

          <button class="btn btn-primary" type="submit">Update</button>

    </form>



@endsection
