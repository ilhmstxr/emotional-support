<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SHEA')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoJtKh7z7lGz7fuP4F8nfdFvAOA6Gg/z6Y5J6XqqyGXYM2ntX88WpH3jBc3pL+eEwM6YQ==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqFjcJ6pajs/rfdfs3SO+kD4Ck5BdPtF+to8xMp9Mvc9Dw1n9b4d0nqN2l0kYVmU" crossorigin="anonymous"></script>
</head>
<body>
    <div class="hpoppins">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand ms-2" href="#">
                    <img src="{{ url('/img/logoSHEA.png') }}" alt="LOGOSHEA" width="40">
                </a>
                <a class="navbar-brand ms-2" style="color: #2D9CDB; font-weight:700" href="#">SHEA</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link me-5" aria-current="page" href="/menu" style="color: #2D9CDB; font-weight:650;">Beranda</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" href="/curhat">Curhat</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" href="#">Psikolog</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" href="#">Forum</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" href="#">Top Up</a>
                        </li>
                    </ul>
                    <div class="p-auto">
                    <button type="button" class="btn btn-outline me-3" style="color : #2D9CDB; border-color : #2D9CDB; ">Daftar</button>
                    <button type="button" class="btn" style="color : #FFFFFF; background-color : #2D9CDB; ">Masuk</button>
                    </div>
                  </div>
            </div>
        </nav>
    </div>

    <div class="container">
        @yield('content')
    </div>