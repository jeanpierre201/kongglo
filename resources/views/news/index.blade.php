<!-- Semantic UI -->
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"
    integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ=="
    crossorigin="anonymous"/>

@extends('layouts.single-new') @section('content')

<!-- second menu -->
@include('news.partials._second-menu')

<div class="mt-5 container">

    <div class="row">
        <div class="col-md-2">
            <h1>Hello There</h1>
        </div>
        <div class="col-md-8">
            <div class="ui column grid">
                <div class="column">
                    <div class="ui raised segment">
                        <div class="card mb-3">
                            <img class="card-img-top" src="{{$image}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$title}}</h5>
                                <p class="card-text">{{$description}}</p>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <h1>Hello There</h1>
        </div>
    </div>

</div>

@endsection
