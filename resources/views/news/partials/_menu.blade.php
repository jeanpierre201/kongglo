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
