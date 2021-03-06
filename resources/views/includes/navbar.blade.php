<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('/assets/images/logo.png') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mentor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Business</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user-logout') }}">Log Out</a>
                </li>
                @endauth
            </ul>
            @auth
            <div class="d-flex user-logged">
                <a href="#">
                    Halo,{{ Str::limit(Auth::user()->name, 20) }}
                    <img src="{{ Auth::user()->avatar }}" class="user-photo" alt="">
                </a>
            </div>
            @endauth
           @guest
           <div class="d-flex">
            <a href="{{ route('login-user') }}" class="btn btn-master btn-secondary me-3">
                Sign In
            </a>
            <a href="{{ route('login-user') }}" class="btn btn-master btn-primary">
                Sign Up
            </a>
        </div>
           @endguest
        </div>
    </div>
</nav>
