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
        <nav class="navbar navbar-expand-lg bg-body-tertiary mb-2">
            <div class="container-fluid">
                <a class="navbar-brand ms-2" href="/menu">
                    <img src="{{ url('/img/logoSHEA.png') }}" alt="LOGOSHEA" width="40">
                </a>
                <a class="navbar-brand ms-2" style="color: #2D9CDB; font-weight:700" href="/menu">SHEA</a>
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
                            <a class="nav-link" href="/hubungikami">Hubungi Kami</a>
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
                                @if (auth()->user()->role->id == 2)
                                @php
                                $consultant_info = App\Models\consultantInfo::where('consultant_id', auth()->user()->id)->first();
                                @endphp
                                {{ $consultant_info->degree }}
                                @endif
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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

    <div class="bgfooter-text pb-2 pt-5 ps-5 mt-2 ">
        <div class="row">
            <div class="col-5">
                <a href="/menu" class="no-underline">
                    <h6 class="hpoppins" style="color: #FFFFFF;">SHEA</h6>
                </a>
                <p class="pSora text-light pe-3">Jl. Rungkut Madya No. 1, Gn. Anyar, Kec. Gn. Anyar, Surabaya, Jawa
                    Timur 60294</p>
            </div>

            <div class="col-6 footer-grid px-5">
                <div class="link-terkait">
                    <h6 class="hpoppins" style="color: #FFFFFF;">Link Terkait</h6>
                    <ul class="list-group list-group-flush bg-transparent text-start">
                        <li class="list-group-item">
                            <a class="pSora no-underline" href="/menu" style="color: #FFFFFF;">Beranda</a>
                        </li>

                        <li class="list-group-item">
                            <a class="pSora no-underline" href="/curhat" style="color: #FFFFFF;">Curhat</a>
                        </li>

                        <li class="list-group-item">
                            <a class="pSora no-underline" href="/forum" style="color: #FFFFFF;">Forum</a>
                        </li>

                        <li class="list-group-item">
                            <a class="pSora no-underline" href="/topup" style="color: #FFFFFF;">Top Up</a>
                        </li>
                    </ul>
                </div>

                <div class="social-media col-8 text-center ps-5">
                    <h6 class="hpoppins text-light">Social Media</h6>
                    <a href="https://www.instagram.com/azztqy_">
                        <img src="{{ '/img/logofb.png' }}" alt="fb" width="50px" class="p-2 pb-3 pt-4" onclick="openLinkInNewTab()">
                    </a>
                    <br>
                    <a>
                        <img src="{{ '/img/logoig.png' }}" alt="ig" width="50px" class="p-2" onclick="openLinkInNewTab()">
                        <script>
                            function openLinkInNewTab() {
                                var linkToOpen = 'https://www.instagram.com/azztqy_';
                                window.open(linkToOpen, '_blank');
                            }
                        </script>
                    </a>
                </div>

                <div class="col">
                    <img src="{{ url('/img/logoSHEA.png') }}" alt="LOGOSHEA" width="130">
                </div>


            </div>
        </div>

        <div class="line pt-2"></div>

        <div class="container pSora text-center text-light">
            <p>Copyright © SHEA 2024</p>
        </div>