@extends('layouts.blog')


 @section('content')

  <!-- Title -->
  <h1 class="mt-4">{{$post->title}}</h1>

<!-- Author -->
<p class="lead">
  by
  <a href="#">{{$post->user->name}}</a>
</p>

<hr>

<!-- Date/Time -->
<p>Posted on {{$post->created_at->diffForHumans()}}</p>

<hr>

<!-- Preview Image -->
<img class="img-fluid rounded" src="{{$post->post_image}}" alt="">

<hr>

<!-- Post Content -->
<p class="lead">{{$post->body}}</p>

<hr>

@if(Session::has('comment-message'))
{{session('comment-message')}}
@endif

<!-- Comments Form -->
<div class="card my-4">

@if(Session('comment-message'))
<div class="alert alert-success">{{Session::get('comment-message')}}</div>
@endif

  <h5 class="card-header">Leave a Comment:</h5>
  <div class="card-body">

  <form method="post" action="{{route('post.comment')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
          <input type="hidden" name="post_id" value="{{$post->id}}">
          <textarea name="body" class="form-control" id="body" rows="3"></textarea>
          </div>
          <button class="btn btn-primary" type="submit">Submit</button>
    </form>


  </div>
</div>

<!-- Single Comment -->
@foreach ($comments as $comment)
<div class="media mb-4">
  <img height="64" class="d-flex mr-3 rounded-circle" src="{{$comment->avatar}}" alt="">
  <div class="media-body">
    <h5 class="mt-0">{{$comment->username}}
        <small>{{$comment->created_at->diffForHumans()}}</small>
    </h5>
    {{$comment->body}}

    <!-- Comment with nested comments -->

    @foreach ($comment->replies as $reply)
    <div class="media mt-4">
        <img height="64" class="d-flex mr-3 rounded-circle" src="{{$reply->avatar}}" alt="">
        <div class="media-body">
          <h5 class="mt-0">{{$reply->username}}
            <small>{{$reply->created_at->diffForHumans()}}</small>
          </h5>
          {{$reply->body}}
        </div>
      </div>
    @endforeach

          <!-- Reply Form -->
          <form method="post" action="{{route('reply.create')}}" enctype="multipart/form-data">
            @csrf
            <div class="mt-2 form-group">
            <input type="hidden" name="comment_id" value="{{$comment->id}}">
            <textarea name="body" class="form-control" id="body" rows="1"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
      </form>

  </div>
</div>
@endforeach

<!-- Comment with nested comments -->
<div class="media mb-4">
  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
  <div class="media-body">
    <h5 class="mt-0">Commenter Name</h5>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

    <div class="media mt-4">
      <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
      <div class="media-body">
        <h5 class="mt-0">Commenter Name</h5>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
      </div>
    </div>

  </div>
</div>

@endsection

