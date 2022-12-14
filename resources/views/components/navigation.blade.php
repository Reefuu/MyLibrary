<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tentangkita">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kontakkita">Contact</a>
                </li>
                <li class="nav-item">
                    @auth
                        @if (auth()->user()->status == 'admin')
                            <a class="nav-link" href="/admin">Admin</a>
                        @endif
                    @endauth
                </li>
                <li class="nav-item">
                    @auth
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="btn" type="submit">Logout</button>
                        </form>
                    @endauth
                    @guest
                        <a class="nav-link" href="/login">Login</a>
                    @endguest
                </li>
            </ul>
        </div>
    </div>
</nav>
