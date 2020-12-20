@extends('layouts.admin')

@section('content')

<h1>Category</h1>

<div class="row">

<div class="col-sm-6">

    <form method="post" action="{{route('category.update', $category)}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="name" class="">Category</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="{{$category->name}}">
        </div>

        <button class="btn btn-info" type="submit">Edit category</button>
  </form>


    <form method="delete" action="{{route('category.destroy', $category)}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <button class="btn btn-error" type="submit">Delete</button>
        </div>
    </form>


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
