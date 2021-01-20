@extends('layouts.single-new')

@section('content')

<div class="mt-5 container">

        <div class="mt-5 row">
            <div class="mt-5 col-md-2">
                <h1>Hello There</h1>
            </div>
            <div class="mt-5  col-md-8">
                <div class="ui column grid">
                    <div class="column">
                        <div class="ui raised segment">
                            <div class="card mb-3">
                                <img class="card-img-top" src="{{$image}}" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">{{$title}}</h5>
                                  <p class="card-text">{{$description}}</p>
                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5  col-md-2">
                <h1>Hello There</h1>
            </div>
        </div>

</div>

@endsection
