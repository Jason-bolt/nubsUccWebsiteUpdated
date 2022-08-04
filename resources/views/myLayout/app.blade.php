<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NUBS UCC - {{ $page }}</title>

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
            <a href="{{ route('home') }}" class="navbar-brand">
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
                        <a href="{{ route('home') }}" class="nav-link {{ $page == "Home" ? "active" : '' }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('about') }}" class="nav-link {{ $page == "About" ? "active" : '' }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('news_events') }}" class="nav-link {{ $page == "News/Events" ? "active" : '' }}">News/Events</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('gallery') }}" class="nav-link {{ $page == "Gallery" ? "active" : '' }}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('departments') }}" class="nav-link {{ $page == "Departments" ? "active" : '' }}">Departments</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('executives') }}" class="nav-link {{ $page == "Executives" ? "active" : '' }}">Executives</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contact') }}" class="nav-link {{ $page == "Contact" ? "active" : '' }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('donate') }}" class="nav-link {{ $page == "Donate" ? "active" : '' }}"><u>Donate</u></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

@yield('content')


<!-- Motto -->
<section class="py-5 p-sm-5">
    <div class="container text-center">
        <h3>Follow Us On</h3>
        <a href="https://www.facebook.com/nubsucc12/"><i class="bi bi-instagram text-dark mx-1 h3 mx-2"></i></a>
        <a href="#"><i class="bi bi-facebook text-dark mx-1 h3 mx-2"></i></a>
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

