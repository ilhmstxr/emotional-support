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
                <div class="row">
                    <form action="{{ route('transaction.check_order') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="lokasiNow" class="form-label hpoppins m-1 text-light">Lokasi Anda Sekarang :</label>
                            <input type="text" class="form-control" id="lokasi" value="" name="lokasi">
                        </div>

                        <div class="mb-3">
                            <div class="kiri">

                                <input type="date" class="form-control" id="tanggalPick" placeholder="Pilih tanggal "
                                    min="{{ today()->format('Y-m-d') }}" name="tanggal">
                            </div>
                            <div class="kanan">

                                <input type="time" class="form-control" id="waktuPick" placeholder="Pilih waktu"
                                    min="{{ today()->format('H:i') }}" name="waktu">
                            </div>
                        </div>


                        <div class="mb-3">
                            <input type="number" class="form-control" id="hargaWant"
                                placeholder="Masukan Harga yang anda inginkan" name="harga">
                        </div>
                        <button class="wbutton-outline hpoppins" type="submit" onclick="validateForm()">Cari
                            Psikolog</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- MAPS -->
        <!-- MAPS -->
        <!-- MAPS -->



    @endsection

    <script src="{{ asset('assets/js/map.js') }}"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7GbCxzGo3Db3nQrvUL8B0o9L2GcHZpBI&callback=initMap&v=weekly"
        defer></script>
    <link rel="stylesheet" href="{{ asset('assets/css/map.css') }}">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        @if ($message = Session::get('denied'))
            Swal.fire({
                title: 'Error',
                text: '{{ $message }}',
                icon: 'error',
                confirmButtonText: 'kembali ke transaksi'
            })
        @endif


        function validateForm() {

            let lokasi = document.getElementById("lokasi").value;
            let tanggalPick = document.getElementById("tanggalPick").value;
            let waktuPick = document.getElementById("waktuPick").value;
            let hargaWant = document.getElementById("hargaWant").value;

            if (lokasi.trim() === "") {
                // console.log("lokasi harus diisi");
                Swal.fire({
                    title: 'Error',
                    text: 'lokasi harus diisi',
                    icon: 'error',
                    confirmButtonText: 'kembali ke transaksi'
                })
                event.preventDefault();
            }
            if (tanggalPick.trim() === "") {
                // console.log("tanggal harus diisi");
                Swal.fire({
                    title: 'Error',
                    text: 'tanggal harus diisi',
                    icon: 'error',
                    confirmButtonText: 'kembali ke transaksi'
                })
                event.preventDefault();
            }
            if (waktuPick.trim() === "") {
                // console.log("waktu harus diisi ");
                Swal.fire({
                    title: 'Error',
                    text: 'waktu harus diisi',
                    icon: 'error',
                    confirmButtonText: 'kembali ke transaksi'
                })
                event.preventDefault();
            }
            if (hargaWant.trim() === "") {
                // console.log("harga harus diisi ");
                Swal.fire({
                    title: 'Error',
                    text: 'harga harus diisi',
                    icon: 'error',
                    confirmButtonText: 'kembali ke transaksi'
                })
                event.preventDefault();
            }
        }

        // Set the value using JavaScript after the page has loaded
        document.addEventListener('DOMContentLoaded', function() {
            var currentDate = new Date(); // or get the date from your server or other sources
            var formattedDate = currentDate.toISOString().slice(0, 10);

            document.getElementById('tanggalPick').value = formattedDate;

            var currentTime = new Date();
            var hours = currentTime.getHours();
            let minutes = currentTime.getMinutes();

            if (minutes < 10) {
                minutes = "0" + minutes;
            }

            var formattedTime = hours + ":" + minutes;

            document.getElementById('waktuPick').value = formattedTime;
            // console.log(currentDate);
            // console.log(formattedTime);
            // console.log(minutes);
        });
    </script>
</body>

</html>
