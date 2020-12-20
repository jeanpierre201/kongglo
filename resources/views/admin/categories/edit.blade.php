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

                <button class="btn btn-primary col-sm-6" type="submit">Update category</button>
            </form>
    </div>
            <div class="col-sm-6">
                <form method="post" action="{{route('category.destroy', $category)}}" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <div class="form-group">
                    <button class="btn btn-danger col-sm-6" type="submit">Delete</button>
                    </div>
                </form>
            </div>




@endsection

@section('scripts')

<!-- Page level plugins -->
  <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('js/demo/datatables-demo.js')}}"></script>

@endsection
