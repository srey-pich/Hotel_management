<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>
    <script type="text/javascript" src="{{ asset('vendor') }}/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('vendor') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">A Hotel </a>
        <button class="navbar-toggler" type="button" data-bs-toggler="collapse" data-bs-toggler="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link"  href="/service">Services</a>
                <a class="nav-link"  href="/gallary">Galary</a>
                <a class="nav-link"  href="page/about-us">About US</a>
                <a class="nav-link"  href="page/contact-us">Contact US</a>
                 <a class="nav-link"  href="/add-testimonial">Testimonal</a>
                @if(Session::has('customerlogin'))
                <a class="nav-link"  href="">testima</a>
                <a class="nav-link"  href="">Logout</a>
                <a class="nav-link btn btn-sm btn-danger"  href="">Booing</a>
                @else
                {{-- <a class="nav-link"  href="{{url('login')}}">Login</a>
                <a class="nav-link"  href="{{url('register')}}">Register</a> --}}
                <a class="nav-link  btn btn-sm btn-danger"  href="{{url('booking')}}">Booking</a>
                @endif
            </div>
        </div>
    </div>
</nav>
<main>
    @yield('content')
</main>
</body>
</html>
