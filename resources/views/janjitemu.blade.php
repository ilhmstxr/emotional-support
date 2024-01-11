@extends('layouts.navbar')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title', 'SHEA')
    <link rel="icon" href="{{ '/img/logoSHEA.png' }}">
</head>

<body>
    @section('content')

        <div class="d-block p-5 text-center">
            <a href="/curhatonline" class="btn hpoppins" style="color: #2D9CDB; border-color:#2D9CDB;" role="button">
                Curhat Online
            </a>
            <a href="/janjitemu" class="btn  hpoppins " style="background-color:#2D9CDB; color:#FFFFFF;" role="button">
                Janji Temu
            </a>
        </div>

        <h2 class="hpoppins text-center p-3" style="color: #2D9CDB;">Buat Janji Untuk Curhat Dengan Mitra Kami Di Sekitarmu
        </h2>

        <!-- MAPS -->
        <!-- MAPS -->
        <!-- MAPS -->

        <div class="mapsCanvas">
            <div id="map">

            </div>
            <div class="container" style="background-color: #2D9CDB;">
            <form action="">
                <div class="mb-3">
                    <label for="lokasiNow" class="form-label hpoppins m-1 text-light">Lokasi Anda Sekarang :</label>
                    <input type="text" class="form-control" id="yourLocation" 
                        value="">
                </div>

                <div class="mb-3">
                    <input type="date" class="form-control" id="tanggalPick" 
                        placeholder="Pilih tanggal dan waktu">
                </div>
                

                <div class="mb-3">
                    <input type="number" class="form-control" id="hargaWant" 
                        placeholder="Masukan Harga yang anda inginkan">
                </div>
                <button class="wbutton-outline hpoppins" type="submit">Cari Psikolog</button>
            </form>
            </div>
        </div>

        <!-- MAPS -->
        <!-- MAPS -->
        <!-- MAPS -->

@include('layouts.footer')

        @endsection

        <script src="{{ asset('assets/js/map.js') }}"></script>
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7GbCxzGo3Db3nQrvUL8B0o9L2GcHZpBI&callback=initMap&v=weekly"
            defer></script>
        <link rel="stylesheet" href="{{ asset('assets/css/map.css') }}">
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        <script>
          
        </script>
</body>

</html>
