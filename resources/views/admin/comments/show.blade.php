@extends('layouts.admin')

@section('content')

<h1>Comments</h1>

<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Comments from Post <a href="{{route('post', $post->id)}}">{{$post->id}}</a></h6>
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
                      <th>Approve</th>
                      <th>Delete</th>
                      <th>Replies</th>
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
                      <th>Approve</th>
                      <th>Delete</th>
                      <th>Replies</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($comments as $comment)
                    <tr>
                      <td><a href="{{route('post', $comment->post_id)}}">{{$comment->id}}</a></td>
                      <td><img height="40px" src="" alt=""></td>
                      <td>{{$comment->username}}</td>
                      <td>{{$comment->body}}</td>
                      <td>{{$comment->created_at->diffForHumans()}}</td>
                      <td>{{$comment->updated_at->diffForHumans()}}</td>
                      <td>
                      <!-- APPROVE -->

                      @if($comment->is_active)

                      <form method="post" action="{{route('comment.update', $comment)}}" enctype="multipart/form-data">
                      @csrf
                      @method('PATCH')
                      <input type="hidden" name="is_active" value="0">
                      <button type="submit" class="btn btn-success">Un-approve</button>
                      </form>

                      @else

                      <form method="post" action="{{route('comment.update', $comment)}}" enctype="multipart/form-data">
                      @csrf
                      @method('PATCH')
                      <input type="hidden" name="is_active" value="1">
                      <button type="submit" class="btn btn-info">Approve</button>
                      </form>

                      @endif


                      <!--  -->
                      </td>
                      <td>
                      <!-- DELETE -->
                      <form method="post" action="{{route('comment.destroy', $comment)}}" enctype="multipart/form-data">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                      <!--  -->
                      </td>
                      <th><a href="{{route('reply.show', $comment->id)}}">Show Replies</a></th>
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
