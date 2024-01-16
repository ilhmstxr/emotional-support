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
    <div class="container p-5">
        <div class="border-hk center">
            <h3 class="hpoppins" style="color:#2D9CDB; border-bottom:2px solid #2D9CDB; margin-top:20px; padding-bottom: 3px; display:inline-block;">
                Hubungi Kami
            </h3>
            <br>
            <h4 class="hpoppins ps-5 pt-2" style="float: inline-start;">Tinggalkan Pesan Untuk Kami</h4>

            <p class="pt-3 pSora" style=""> Jl. Rungkut Madya No.1, Gn. Anyar, Kec. Gn. Anyar, Surabaya, Jawa Timur 60294</p>
            <p class="pt-3 pSora" style=""> +6281356567878</p>
            <p class="pt-3 pSora" style=""> SHEA@gmail.com</p>

            <form action="" class="p-5" style="">
                <label for="nama" class="pSora mb-2" style="color: #2D9CDB; text-align:start; float:inline-start;">Nama</label>
                <input type="text" class="form-control mt-5 mb-2" placeholder="Masukan Nama Anda" style="width:400px">
                <label for="email" class="pSora mb-2" style="color: #2D9CDB; text-align:start; float:inline-start;">Email</label>
                <input type="text" class="form-control mt-5 mb-2" placeholder="Masukan Email Anda" style="width:400px">
                <label for="pesan" class="pSora mb-2" style="color: #2D9CDB; text-align:start; float:inline-start;">Pesan</label>
                <input type="message" class="form-control mb-2 mt-5" placeholder="Masukan Pesan Anda" style="width:400px; padding-bottom:90px">
                <button type="submit" class="bbutton-outline hpoppins" style="float:left; padding-left:175px; padding-right:175px; font-size:large">Kirim</button>
            </form>

            



        </div>
    </div>


    @endsection
</body>

</html>