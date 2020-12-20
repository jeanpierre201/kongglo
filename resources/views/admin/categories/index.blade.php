@extends('layouts.admin')

@section('content')

<h1>Categories</h1>

<div class="row">

<div class="col-sm-6">

    <form method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="name" class="">Category</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter a Category">
        </div>

        <button class="btn btn-primary" type="submit">Create category</button>

  </form>

</div>

<div class="col-sm-6">

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
              <th>Created at</th>
              <th>Updated at</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Created at</th>
                <th>Updated at</th>
            </tr>
          </tfoot>
          <tbody>
          {{$first = true}}
          @foreach($categories as $category)
            <tr>
              <td>{{$category->id}}</td>
              <td>
              @if(!$first)
                <a href="{{route('category.edit', $category->id)}}">{{$category->name}}</a>
              @else
                {{$first = false}}
                {{$category->name}}
              @endif
              </td>
              <td>{{$category->created_at->diffForHumans()}}</td>
              <td>{{$category->updated_at->diffForHumans()}}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
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
