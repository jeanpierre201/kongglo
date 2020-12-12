@extends('layouts.admin')

@section('content')

<h1>Categories</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">All Categories</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Delete</th>
              <th>Created at</th>
              <th>Updated at</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Delete</th>
                <th>Created at</th>
                <th>Updated at</th>
            </tr>
          </tfoot>
          <tbody>
          @foreach($categories as $category)
            <tr>
              <td>{{$category->id}}</td>
              <td>{{$category->name}}</td>
              <td></td>
              <td>{{$category->created_at->diffForHumans()}}</td>
              <td>{{$category->updated_at->diffForHumans()}}</td>
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
