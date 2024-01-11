@extends('layouts.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title','SHEA')
    <link rel="icon" href="{{('/img/logoSHEA.png')}}">
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

<h2 class="hpoppins text-center p-3" style="color: #2D9CDB;">Buat Janji Untuk Curhat Dengan Mitra Kami Di Sekitarmu</h2>

<!-- MAPS -->
<!-- MAPS -->
<!-- MAPS -->

<div>


</div>

<!-- MAPS -->
<!-- MAPS -->
<!-- MAPS -->

@include('layouts.footer')

@endsection
</body>
</html>