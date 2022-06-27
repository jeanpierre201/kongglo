<!-- Header -->
@include('layouts.common._header')

<title>News</title>

@section('style')

<link href="{{asset('css/menu/secondary-menu.css')}}" rel="stylesheet">

<!-- Custom styles for component News -->
<link
    href="https://fonts.googleapis.com/css?family=Montserrat"
    rel="stylesheet">
<link href="{{asset('css/index.css')}}" rel="stylesheet">
<link href="{{asset('css/components/portada.css')}}" rel="stylesheet">
<link href="{{asset('css/components/item-title-list.css')}}" rel="stylesheet">
<link href="{{asset('css/components/single-item-text.css')}}" rel="stylesheet">
<link href="{{asset('css/components/item-image-list.css')}}" rel="stylesheet">
<link href="{{asset('css/components/carousel-image-text.css')}}" rel="stylesheet">
<link href="{{asset('css/components/row-single-text.css')}}" rel="stylesheet">
<link href="{{asset('css/components/row-image-title.css')}}" rel="stylesheet">
<link href="{{asset('css/components/single-image-text.css')}}" rel="stylesheet">


<!-- Semantic UI -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous"/>

@show

</head>

<body>

  <!-- Navigation -->
  @include('layouts.common._navbar')

  <!-- second menu -->
@include('news.partials._second-menu')

  <!-- Page Content -->
        @yield('content')

<!-- Footer -->
@include('layouts.common._footer')
