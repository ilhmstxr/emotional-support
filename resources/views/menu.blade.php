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
            <h3 class="hpoppins" style="color: #2BDDEA;">
                Ruang Aman Untuk Berbagi Cerita, Mendapat Dukungan, dan Belajar Tentang Kesehatan Mental.
            </h3>
        </div>
    </div>
    <div class="carousel-item">
        <img src="{{('/img/bgcrhome.png')}}" class="d-block w-100" alt="home2">
        <div class="carousel-caption d-none d-md-block">
            <h3 class="hpoppins" style="color: #2BDDEA;">
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
<h2 class="text-center pb-4 pt-4 hpoppins" style="color: #2D9CDB;">Mengapa Harus Konseling di SHEA ?</h2>
<div class="container overflow-hidden text-center mx-10">
  <div class="row gx-5 px-5">
    <div class="col text-center">
        <img src="{{('/img/lovebiru.png')}}" width="85px">
     <div class="p-3" style="font-weight: bold;">Cerita Dimana Saja dan Kapan Saja</div>
     <div class=""><p>Saatnya pilih cara curhat paling nyaman untukmu. Bisa tatap muka maupun online, semua pasti bisa!</p></div>
    </div>
    <div class="col">
    <img src="{{('/img/lovebiru.png')}}" width="85px">
      <div class="p-3" style="font-weight: bold;">Kamu Bercerita, Kami Jaga Rahasia</div>
      <div class=""><p>Tidak perlu khawatir, curhat tentang apa pun akan dijamin keamanannya.</p></div>
    </div>
    <div class="col">
    <img src="{{('/img/lovebiru.png')}}" width="85px">
      <div class="p-3" style="font-weight: bold;">Tuangkan Isi Hati Pada Yang Ahli</div>
      <div class=""><p>Bebas ceritakan masalahmu dari berbagai topik pada 900+ sobat SHEA berpengalaman.</p></div>
    </div>
  </div>
</div>
<br>
<h2 class="text-center pb-4 hpoppins" style="color: #2D9CDB;">Psikolog SHEA</h2>
<div class="container overflow-hidden text-center">
  <div class="row gx-5 px-5 pb-4">
    <div class="col">
    <img src="{{('/img/profile.png')}}" width="130px">
     <div class="p-3" style="font-weight: bold;">Kim Bab, M.Psi, Psikolog</div>
     <div class=""></div>
     <button type="button" class="btn btn-outline text-center" href="#"style="color : #2D9CDB; border-color : #2D9CDB; border-radius: 7px;">Lihat Selengkapnya</button>
    </div>
    <div class="col">
    <img src="{{('/img/profile.png')}}" width="130px">
      <div class="p-3" style="font-weight: bold;">Ram Yeon, M.Psi, Psikolog</div>
      <div class=""></div>
      <button type="button" class="btn btn-outline text-center" href="#" style="color : #2D9CDB; border-color : #2D9CDB; border-radius: 7px;">Lihat Selengkapnya</button>
    </div>
    <div class="col">
    <img src="{{('/img/profile.png')}}" width="130px">
      <div class="p-3" style="font-weight: bold;">Bul Dak, M.Psi, Psikolog</div>
      <div class=""></div>
      <button type="button" class="btn btn-outline text-center" href="#" style="color : #2D9CDB; border-color : #2D9CDB; border-radius: 7px;">Lihat Selengkapnya</button>
    </div>
  </div>
</div>
</div>
<div class="text-center mb-5">
    <button type="button" href="#" class="btn hpoppins" style="background-color: #2D9CDB; color:#FFFFFF;">Lihat Semua</button>
</div>


<!-- FOOTER -->
<!-- FOOTER -->
<!-- FOOTER -->

<div class="bgfooter-text pb-2 pt-5 ps-5 ">
    <div class="row">
        <div class="col-6">
            <a href="#" class="no-underline">
            <h6 class="hpoppins" style="color: #FFFFFF;">SHEA</h6>
            </a>
            <p class="pSora text-light pe-5">Jl. Rungkut Madya No. 1, Gn. Anyar, Kec. Gn. Anyar, Surabaya, Jawa Timur 60294</p>
        </div>

        <div class="col-6 footer-grid pe-5">
            <div class="link-terkait">
                <h6 class="hpoppins" style="color: #FFFFFF;">Link Terkait</h6>
                <ul class="list-group list-group-flush bg-transparent text-start">
                <li class="list-group-item">
                <a class="pSora no-underline" href="#" style="color: #FFFFFF;">Beranda</a>
                </li>
            
                <li class="list-group-item">
                <a class="pSora no-underline" href="#" style="color: #FFFFFF;">Curhat</a>
                </li>

                <li class="list-group-item">
                <a class="pSora no-underline" href="#" style="color: #FFFFFF;">Forum</a>
                </li>

                <li class="list-group-item">
                <a class="pSora no-underline" href="#" style="color: #FFFFFF;">Top Up</a>
                </li>
                </ul>
            </div>

            <div class="social-media col-8 text-center">
                <h6 class="hpoppins text-light">Social Media</h6>
                <a href="#">
                    <img src="{{('/img/logofb.png')}}" alt="ig" width="50px" class="p-2 pb-3 pt-4">
                </a>
                <br>
                <a>
                <img src="{{('/img/logoig.png')}}" alt="ig" width="50px" class="p-2" onclick="openLinkInNewTab()"> 
                <script>
                function openLinkInNewTab() {
                var linkToOpen = 'https://www.instagram.com/azztqy_';
                window.open(linkToOpen, '_blank');
                }
                </script>
                </a>
            </div>
        </div>
    </div>

    <div class="line pt-2"></div>

    <div class="container pSora text-center text-light" >
        <p>Copyright © SHEA 2024</p>
    </div>
    

</div>
@endsection
</body>
</html>
