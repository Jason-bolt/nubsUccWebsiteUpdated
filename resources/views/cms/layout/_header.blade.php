<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CMS - {{ $page }}</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"
    ></script>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css"
        integrity="sha384-7ynz3n3tAGNUYFZD3cWe5PDcE36xj85vyFkawcF6tIwxvIecqKvfwLiaFdizhPpN"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ asset('css/css.css') }}" />
</head>
<body>
<header class="header">
    <nav class="navbar navbar-expand-lg bg-light navbar-light shadow">
        <div class="container">
            <a href="{{ route('weekly_activities') }}" class="navbar-brand">
                <img
                    src="{{ asset('sysImages/nubs_logo.png') }}"
                    alt="NUBS LOGO"
                    width="50"
                    class="d-inline-block align-text-top"
                />
                NUBS UCC
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navMenu"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{ route('weekly_activities') }}" class="nav-link {{ $page ==  'Weekly Activities' ? 'active' : ''}}"
                        >Weekly Activities</a
                        >
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('news-events') }}" class="nav-link {{ $page ==  'News/Events' ? 'active' : ''}}">News/Events</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('all_testimonies') }}" class="nav-link {{ $page ==  'Testimonies' ? 'active' : ''}}">Testimonies</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('show_albums') }}" class="nav-link {{ $page ==  'Gallery' ? 'active' : ''}}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('get_executives') }}" class="nav-link {{ $page ==  'Executives' ? 'active' : ''}}">Executives</a>
                    </li>
                    <li class="nav-item">
                        <a href="donate.html" class="nav-link"><u>Donate</u></a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-nubsBlue rounded-pill">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

@if (session('status'))
    <div class="alert alert-success text-center alert-dismissible fade show py-1" role="alert">
        {{ session('status') }}
        <small><button type="button" class="btn-close p-2" data-bs-dismiss="alert" aria-label="Close"></button></small>
    </div>
@endif

@if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <div class="alert alert-warning alert-dismissible fade show py-1 text-center" role="alert">
                {{ $error }}
                <small><button type="button" class="btn-close p-2" data-bs-dismiss="alert" aria-label="Close"></button></small>
            </div>
        @endforeach
    </div>
@endif

@yield('cms_content')

<!-- Motto -->
<section class="py-5 p-sm-5">
    <div class="container text-center">
        <p class="lead mb-0 mt-4" style="color: red">
            <em>Empowered... For action!!!</em>
        </p>
    </div>
</section>

<!-- Footer -->
<footer
    class="footer p-5 text-white text-center position-relative"
    style="background-color: rgb(3, 23, 83)"
>
    <div class="container">
        <p class="lead">Copyright NUBS UCC &copy; 2022</p>
        <a href="#" class="position-absolute bottom-0 end-0 p-5 text-white">
            <i class="bi bi-arrow-up-circle h1"></i>
        </a>
    </div>
</footer>
</body>
</html>
