@extends('layouts.admin')

@section('content')

@if(auth()->user()->userHasRole('Admin'))

<h1 class="h3 mb-4 text-gray-800">DASHBOARD</h1>

@endif


@endsection