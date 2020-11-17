@extends('layouts.admin')

@section('content')

<h1>All Comments</h1>

<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Posts</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Post id</th>
                      <th>Avatar</th>
                      <th>Username</th>
                      <th>Comment</th>
                      <th>Created at</th>
                      <th>Updated at</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Post id</th>
                      <th>Avatar</th>
                      <th>Username</th>
                      <th>Comment</th>
                      <th>Created at</th>
                      <th>Updated at</th>
                      <th>Delete</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($comments as $comment)
                    <tr>
                      <td><a href="{{route('post', $comment->post_id)}}">{{$comment->post_id}}</a></td>
                      <td><img height="40px" src="" alt=""></td>
                      <td>{{$comment->username}}</td>
                      <td>{{$comment->body}}</td>
                      <td>{{$comment->created_at->diffForHumans()}}</td>
                      <td>{{$comment->updated_at->diffForHumans()}}</td>
                      <td>

                      <!--  -->
 

                      <!--  -->

                      </td>
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