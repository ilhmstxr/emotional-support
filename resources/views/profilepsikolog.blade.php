@extends('layouts.navbar')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title','SHEA')
    <link rel="icon" href="{{ '/img/logoSHEA.png' }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>
<body>
@section('content')
    
    <div class="d-block border border-light-subtle mt-4 mx-5 mx-5 px-0 mb-5" style="border-radius: 8px;">
        <figure class="figure-profile">
            <img src="{{'img/profile.png'}}" width="190px"class="rounded-4 py-1"  >
            <figcaption class="hpoppins">Kim Bab, M. Psi, Psikolog</figcaption>
            <figcaption class="pSora" style="color: #D3D3D3;">Psikologi Klinis</figcaption> <br>
            <figcaption class="pSora" style="color: #D3D3D3;"><img src="{{'img/star.png'}}" width="20px" style="padding-right: 5px;"> 4.9 (100)</figcaption>
            <img src="{{'/img/blue_profile.png'}}" class="pt-4">
            <figcaption class="pSora pb-3 pt-2" style="font-weight: bold;">Tentang Saya</figcaption>
            <figcaption class="pSora px-4 " style="text-align: left; color:#808080;">Saya adalah lulusan S2 Psikologi klinis tahun 2021 yang memiliki pengalaman menangani kasus pada klien anak-anak dan dewasa (praktek profesi di bawah supervisi Psikolog profesional secara online). Sejak menempuh masa studi S1 Psikologi, saya tertarik mendalami bidang minat psikologi klinis, khususnya tentang meningkatkan kesejahteraan manusia (well-being) dan penanganan kondisi emosi sedih yang mendalam (depresi).</figcaption> <br>
            <figcaption class="pSora px-4" style="text-align: left; color:#808080;">Selama kita hidup, kita tidak pernah lepas dari masalah. Saya percaya bahwa manusia sebagai pribadi yang unik memiliki potensi untuk menyelesaikan permasalahan dalam hidupnya, hanya saja seringkali kita tidak menyadari potensi itu. Oleh karena itu, bantuan dari kami tenaga profesional lulusan Psikologi Klinis Profesi akan membantu secara objektif menganalisis permasalahan klien.</figcaption>
            <img src="{{'img/blue_case.png'}}" class="pt-4">
            <figcaption class="pSora pb-3 pt-2" style="font-weight: bold;">Kasus Yang Ditangani</figcaption>
            <figcaption class="pSora px-4" style="color: #808080; text-align: left;">Pengasuhan dan perkembangan anak hingga remaja, pengelolaan stres, depresi, masalah relasional (attachment), pengelolaan rasa marah, trauma.</figcaption>
        </figure>
    </div>

@endsection
</body>
</html>