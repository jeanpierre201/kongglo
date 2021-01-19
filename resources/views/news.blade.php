<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>News</title>

        <!-- Bootstrap core CSS -->
        <link
            href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}"
            rel="stylesheet">

        <link href="{{asset('css/app.css')}}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">

        <!-- Custom styles for component Portada -->
        <link
            href="https://fonts.googleapis.com/css?family=Montserrat"
            rel="stylesheet">
        <link href="{{asset('css/components/portada/index.css')}}" rel="stylesheet">
        <link href="{{asset('css/components/portada/portada.css')}}" rel="stylesheet">

        <!-- Semantic UI -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"
            integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ=="
            crossorigin="anonymous"/>

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Kongglo</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarResponsive"
                    aria-controls="navbarResponsive"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">News
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('blog.index')}}">Blog</a>
                        </li>

                        @if(Auth::check())

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.index')}}">Admin</a>
                        </li>

                        <li class="nav-item">
                            <form action="/logout" method="post">
                                @csrf
                                <!-- <a class="nav-link" href="/logout">Logout</a> -->
                                <button class="btn btn-link nav-link">Logout</button>
                                <!-- <button class="btn btn-danger">logout</button> -->
                            </form>
                        </li>

                        @else

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>

                        @endif

                    </ul>
                </div>
            </div>
        </nav>

        <!-- second menu -->
        <ul class="nav nav-tabs">
            <li class="active">
              <a href="#">Home</a>
            </li>
            <li><a href="#">...</a></li>
            <li><a href="#">...</a></li>
          </ul>

        <!-- Page Content -->
        <div class="container">

            <div class="container">
                <div id="root"></div>
                <div class="row">
                    <div class="col-md">
                        <div id="cnn-image-list"></div>
                    </div>
                    <div class="col-md">
                        <div class="ui medium rectangle test ad" data-text="Medium Rectangle"></div>
                    </div>
                    <div class="col-md">

                        <div class="ui column grid">
                            <div class="column">
                                <div class="ui raised segment">
                                    <a class="ui red ribbon label">CNN</a>
                                    <span>Latest News</span>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
            </div>
            <!-- /.container -->
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Component Portada - Rss Feed-->
        <script src="/js/feednami.js"></script>

        <!-- Bootstrap React Components -->
        <script src="/js/app.js"></script>

    </body>

</html>
