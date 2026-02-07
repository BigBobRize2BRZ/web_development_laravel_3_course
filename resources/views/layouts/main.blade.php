<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>{{ $title ?? 'Default title page' }}</title> -->
    <title>@yield('title', 'Default title page')</title>
    <!-- https://getbootstrap.com/docs/5.3/getting-started/download/ -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"> -->

    <!-- Ручное подключение bootstrap -->
    <!-- <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.bundle.js')}}"> -->

    <!-- asset ищет в корневой папке public-->
    <!-- <link rel="stylesheet" href="{{asset('main.css')}}"> -->

    @vite(['resources/bootstrap/bootstrap.css', 'resources/css/main.css', 'resources/bootstrap/bootstrap.bundle.js'])
</head>

<body>
    <!-- Директива -->
    @section('navbar')
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('home.index')}}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('home.test')}}">Test</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('home.contact')}}">Contact</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    @show

    <div class="container mt-3">
        @yield('content')
    </div>

    @include('layouts.includes.footer')
    <script src="{{asset('')}}"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script> -->
</body>

</html>