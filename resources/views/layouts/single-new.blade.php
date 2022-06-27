@include('layouts.common._header')

<link href="{{asset('css/menu/secondary-menu.css')}}" rel="stylesheet">

<title>News</title>
</head>

<body>

  <!-- Navigation -->
  @include('layouts.common._navbar')

  <!-- Page Content -->
        @yield('content')


<!-- Footer -->
@include('layouts.common._footer')
