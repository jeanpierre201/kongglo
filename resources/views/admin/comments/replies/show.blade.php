@extends('layouts.admin')

@section('content')

<h1>Replies</h1>

<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Replies from Comment <a href="{{route('comment.show', $comment->post_id)}}">{{$comment->id}}</a></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Comment id</th>
                      <th>Avatar</th>
                      <th>Username</th>
                      <th>Comment</th>
                      <th>Created at</th>
                      <th>Updated at</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Comment id</th>
                      <th>Avatar</th>
                      <th>Username</th>
                      <th>Comment</th>
                      <th>Created at</th>
                      <th>Updated at</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($replies as $reply)
                    <tr>
                      <td><a href="{{route('post', $comment->post_id)}}">{{$reply->id}}</a></td>
                      <td><img height="40px" src="{{$reply->avatar}}" alt=""></td>
                      <td>{{$reply->username}}</td>
                      <td>{{$reply->body}}</td>
                      <td>{{$reply->created_at->diffForHumans()}}</td>
                      <td>{{$reply->updated_at->diffForHumans()}}</td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>


@endsection

@section('scripts')

<!-- Page level plugins -->
  <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('js/demo/datatables-demo.js')}}"></script>

@endsection
