<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
    <a class="navbar-brand " href="/">Syousetsu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{Request::is('/') ? 'active' : '' }} " aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('about') ? 'active' : '' }}" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('posts') ? 'active' : '' }}" href="/posts">Blog</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link {{Request::is('categories') ? 'active' : '' }}" href="/categories">Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('authors') ? 'active' : '' }}" href="/authors">Authors</a>
            </li>
            </ul>
            <ul class="navbar-nav ms-auto">
            @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">
                        Welcome, {{auth()->user()->name}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a href="/dashboard" class="dropdown-item"><i class="bi bi-layout-text-sidebar-reverse" ></i> My Dashboard</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            @else
            <li class="nav-item">
                <a class="nav-link {{Request::is('login') ? 'active' : '' }}" href="/login" ><i class="bi bi-box-arrow-in-right "></i> Login</a>
            </li>
            @endauth
            </ul>
        </div>
    </div>
</nav>