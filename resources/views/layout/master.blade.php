<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>EduFun</title>
    <link href="{{ asset('bootstrap-5.2.3-dist/css/bootstrap.min.css') }}" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">EduFun</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('categories.index') }}">Category</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('writers.index') }}">Writers</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                    {{-- <li class="nav-item"><a class="nav-link" href="{{ route('popular') }}">Popular</a></li> --}}
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>


    <footer class="bg-dark text-white text-center p-4 mt-auto fixed-bottom">
        <p>@EduFun 2024| Web Programming | Rhevell | 2702221223</p>
    </footer>
</body>

</html>
