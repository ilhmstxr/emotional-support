@extends('layouts.navbar')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title', 'SHEA')
    <link rel="icon" href="{{ '/img/logoSHEA.png' }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</head>

<body>
    @section('content')


        <div class="container d-block p-5 text-center">
            <a href="/curhatonline" class="btn hpoppins" style="background-color:#2D9CDB; color:#FFFFFF;" role="button">
                Curhat Online
            </a>
            <a href="/janjitemu" class="btn  hpoppins " style="color: #2D9CDB; border-color:#2D9CDB;" role="button">
                Janji Temu
            </a>
        </div>

        <h2 class="hpoppins text-center" style="color: #2D9CDB;">Yuk Tuangkan Isi Hatimu </h2>
        <h2 class="hpoppins text-center" style="color: #2D9CDB;">Dengan Curhat Secara Online Dengan Mitra Kami</h2>



        <div class="container">
            <div class="row">
                <div class="col-md4">
                    <form action="#" method="GET" class="mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Cari Psikolog">
                            <button type="submit" class="btn btn-outline-primary"><img src="{{ 'img/searchglass.png' }}"
                                    width="30px"></button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="container text-center">
                <div class="row row-cols-2">
                    @foreach ($consultant as $c)
                        <div class="col">
                            <div class="d-block"
                                style="border-color:black; border-width: 1px 1px 1px 1px; border-style:solid">
                                <img src="{{ 'img/profile.png' }}" width="200px">
                                <div class="container text-start">
                                    <div class="pSora" style="font-weight: bold;">{{ $c->user->name }}, {{ $c->degree }}
                                    </div>
                                    <p class="pSora ">{{ $c->expert_in }}</p>
                                    rating
                                    <img src="{{ 'img/star.png' }}" width="20px">
                                    <img src="{{ 'img/star.png' }}" width="20px">
                                    <img src="{{ 'img/star.png' }}" width="20px">
                                    <img src="{{ 'img/star.png' }}" width="20px">
                                    <img src="{{ 'img/star.png' }}" width="20px">
                                    <p class="pt-1 pSora" style="font-weight: lighter; color:darkgrey;">{{ $c->rating }}
                                        ({{ $c->sessions }})
                                    </p>
                                    <h4 class="pSora" style="font-weight: bold;">Rp
                                        {{ number_format(intval($c->price_online), 0, ',', '.') }}
                                    </h4>
                                    <div class="button-group pb-3 pt-0 d-grid gap-1 me-0 ms-auto">

                                        <form action="{{ route('profilepsikolog', $c->user->id) }}">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $c->user->id }}">
                                            <button type="submit" class="wbutton-outline no-underline pSora"
                                                style="font-weight:600;">Profile
                                                Lengkap</button>
                                        </form>
                                        @if ($c->status == 'online')
                                            <button class="bbutton-outline no-underline pSora" style="font-weight:600;"
                                                onclick="redirectToChatify()">Curhat Online</button>
                                        @else
                                            <button class="busybutton-outline no-underline pSora" style="font-weight:600;"
                                                onclick="redirectToChatify()" disabled>Sibuk</button>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>

        <script src="js/star-rating.min.js"></script>
        <script>
            var stars = new StarRating('.star-rating');

            function redirectToChatify() {
                window.location.href = '/chatify';
            }
        </script>


    @endsection
</body>

</html>
