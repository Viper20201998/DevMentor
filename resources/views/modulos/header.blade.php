<nav class="navbar navbar-expand-lg navbar-light bg-color">
    <div class="container-fluid">
        <i class="bi bi-tropical-storm text-white pe-4"></i>
        <a class="navbar-brand text-light pe-5" href="#">Welcome</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="{{ url('/home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ url('/posts') }}">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ url('/favoritiesposts') }}" tabindex="-1"
                        aria-disabled="true">My
                        Favorites</a>
                </li>
                <!-- dropdown-menu -->
                @auth
                    @yield('favorite')
                @endauth
                <!-- end dropdown-menu -->
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                @auth
                    @yield('publish')
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-success ms-2 ">Login</a>
                @endauth
            </form>
            @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger mx-2">Logout</button>
                </form>
            @else
            @endauth

        </div>
    </div>
</nav>
