<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SHEA')</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
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
                            <a class="nav-link" href="/psikolog">Psikolog</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" href="/forum">Forum</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" href="/topup">Top Up</a>
                        </li>
                    </ul>
                    <div class="button group p-auto">

                    @guest
                            @if (Route::has('login'))
                                <li class="nav-item listNoDots">
                                <a href="/login" type="button" class="bbutton-outline no-underline" style="color : #FFFFFF; background-color : #2D9CDB; list-style:none; ">Masuk</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item listNoDots">
                                <a href="/register" type="button" class="wbutton-outline no-underline" style="color : #2D9CDB; border-color : #2D9CDB; background-color :#FFFFFF;">Daftar</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown listNoDots">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color:#2D9CDB" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                </div>
                  </div>
            </div>
        </nav>
    </div>

    <div class="container">
        @yield('content')
    </div>