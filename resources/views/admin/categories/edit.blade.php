@extends('layouts.admin')

@section('content')

<h1>Category</h1>

    <div class="col-sm-6">

            <form method="post" action="{{route('category.update', $category)}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                <label for="name" class="">Category</label>
                <input type="text" name="name" class="form-control" id="name" value="{{$category->name}}">
                </div>
        <div class="row">
                    <div class="col-sm-6">
                <button class="btn btn-primary col-sm-12" type="submit">Update category</button>
                   </div>
            </form>

            <div class="col-sm-6">
                <form method="post" action="{{route('category.destroy', $category)}}" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <div class="form-group">
                    <button class="btn btn-danger col-sm-12" type="submit">Delete</button>
                    </div>
                </form>
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
