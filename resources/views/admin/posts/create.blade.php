@extends('layouts.admin')

@section('content')

<h1>Create</h1>

    <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
          <label for="title" class="">Title</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Enter a Title">
          </div>

          <div class="form-group">
          <label for="file" >File</label>
          <input type="file" name="post_image" class="form-control-file" id="post_image">
          </div>

          <div class="form-group">
            <label for="category_id" class="">Category</label>
            <select name="category_id" class="form-control" id="category_id">
              <option value="1">Select a category...</option>
              @foreach($categories as $category)
              <option value="{{$category->id}}" >{{$category->name}}</option>
              @endforeach
           </select>
          </div>

          <div class="form-group">
          <textarea name="body" class="form-control" id="body" cols="30" rows="10"></textarea>
          </div>

          <button class="btn btn-primary" type="submit">Submit</button>

    </form>



@endsection
