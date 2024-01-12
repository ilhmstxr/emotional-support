@extends('layouts.navbar')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title', 'SHEA')
    <link rel="icon" href="{{('/img/logoSHEA.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>

<body>
    @section('content')

    <div id="carouselExample" class="carousel slide ">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{('/img/bgcrhome.png')}}" class="d-block w-100" alt="home">
                <div class="carousel-caption d-none d-md-block">
                    <img src="{{('/img/karusel.png')}}" class=" w-50" style="text-align:center" alt="home">
                    <h3 class="hpoppins" style="color: #2D9CDB;">
                        Ruang Aman Untuk Berbagi Cerita, Mendapat Dukungan, dan Belajar Tentang Kesehatan Mental.
                    </h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{('/img/bgcrhome.png')}}" class="d-block w-100" alt="home2">
                <div class="carousel-caption d-none d-md-block">
                    <img src="{{('/img/karusel.png')}}" class=" w-50" style="text-align:center" alt="home">
                    <h3 class="hpoppins" style="color: #2D9CDB;">
                        Tempat yang aman untuk berbagi pengalaman, mendapatkan dukungan, dan memperoleh pengetahuan seputar kesehatan mental.
                    </h3>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="homegutter">
        <h2 class="text-center pt-4 hpoppins" style="color: #2D9CDB;">Mengapa Harus Konseling di SHEA ?</h2>
        <div class="container overflow-hidden text-center mx-10 py-4">
            <div class="row gx-5 px-5">
                <div class="col text-center">
                    <img src="{{('/img/homeG1.png')}}" width="105px" class="p-3">
                    <div class="p-3" style="font-weight: bold;">Cerita Dimana Saja dan Kapan Saja</div>
                    <div class="">
                        <p>Saatnya pilih cara curhat paling nyaman untukmu. Bisa tatap muka maupun online, semua pasti bisa!</p>
                    </div>
                </div>
                <div class="col">
                    <img src="{{('/img/homeG2.png')}}" width="75px" class="p-2">
                    <div class="p-3" style="font-weight: bold;">Kamu Bercerita, Kami Jaga Rahasia</div>
                    <div class="">
                        <p>Tidak perlu khawatir, curhat tentang apa pun akan dijamin keamanannya.</p>
                    </div>
                </div>
                <div class="col">
                    <img src="{{('/img/homeG3.png')}}" width="85px" class="pt-4 pb-3">
                    <div class="p-3" style="font-weight: bold;">Tuangkan Isi Hati Pada Yang Ahli Dengan Harga Terjangkau</div>
                    <div class="">
                        <p>Bebas ceritakan masalahmu dari berbagai topik pada 900+ sobat SHEA berpengalaman.</p>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="text-center pb-4 hpoppins" style="color: #2D9CDB;">Psikolog SHEA</h2>
        <div class="container overflow-hidden text-center">
            <div class="row gx-5 px-5 pb-4">
                <div class="col">
                    <img src="{{('/img/profile.png')}}" width="130px">
                    <div class="p-3" style="font-weight: bold;">Kim Bab, M.Psi, Psikolog</div>
                    <div class="container text-start">
                        <div class="row">
                            <div class="col-sm-1">
                                <img src="{{'/img/user.png'}}" width="20px">
                            </div>
                            <div class="col">
                                <p class="pSora" style="text-align:start">100 Sesi</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-1">
                                <img src="{{'/img/jempol.png'}}" width="20px">
                            </div>
                            <div class="col">
                                <p class="pSora" style="text-align:start">85% Terbantu</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-1">
                                <img src="{{'/img/suitcase.png'}}" width="20px">
                            </div>
                            <div class="col">
                                <p class="pSora" style="text-align:start">Psikologi Klinis</p>
                            </div>
                        </div>

                    </div>
                    <button type="button" class="btn btn-outline text-center my-2" href="#" style="color : #2D9CDB; border-color : #2D9CDB; border-radius: 7px;">Lihat Selengkapnya</button>
                </div>

                <div class="col">
                    <img src="{{('/img/profile.png')}}" width="130px">
                    <div class="p-3" style="font-weight: bold;">Ram Yeon, M.Psi, Psikolog</div>
                    <div class="container text-start">
                        <div class="row">
                            <div class="col-sm-1">
                                <img src="{{'/img/user.png'}}" width="20px">
                            </div>
                            <div class="col">
                                <p class="pSora" style="text-align:start">220 Sesi</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-1">
                                <img src="{{'/img/jempol.png'}}" width="20px">
                            </div>
                            <div class="col">
                                <p class="pSora" style="text-align:start">81% Terbantu</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-1">
                                <img src="{{'/img/suitcase.png'}}" width="20px">
                            </div>
                            <div class="col">
                                <p class="pSora" style="text-align:start">Psikologi Komunitas</p>
                            </div>
                        </div>

                    </div>
                    <button type="button" class="btn btn-outline text-center my-2" href="#" style="color : #2D9CDB; border-color : #2D9CDB; border-radius: 7px;">Lihat Selengkapnya</button>
                </div>

                <div class="col">
                    <img src="{{('/img/profile.png')}}" width="130px">
                    <div class="p-3" style="font-weight: bold;">Bul Dak, M.Psi, Psikolog</div>
                    <div class="container text-start">
                        <div class="row">
                            <div class="col-sm-1">
                                <img src="{{'/img/user.png'}}" width="20px">
                            </div>
                            <div class="col">
                                <p class="pSora" style="text-align:start">40 Sesi</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-1">
                                <img src="{{'/img/jempol.png'}}" width="20px">
                            </div>
                            <div class="col">
                                <p class="pSora" style="text-align:start">91% Terbantu</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-1">
                                <img src="{{'/img/suitcase.png'}}" width="20px">
                            </div>
                            <div class="col">
                                <p class="pSora" style="text-align:start">Psikologi Mental</p>
                            </div>
                        </div>

                    </div>
                    <button type="button" class="btn btn-outline text-center my-2 " href="#" style="color : #2D9CDB; border-color : #2D9CDB; border-radius: 7px;">Lihat Selengkapnya</button>
                </div>
            </div>
        </div>

    </div>

    <div class="text-center mb-5">
        <a type="button" href="#" class="btn hpoppins" style="background-color: #2D9CDB; color:#FFFFFF;">Lihat Semua</a>
    </div>


            @endsection
</body>

</html>