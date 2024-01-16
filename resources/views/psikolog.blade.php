@extends('layouts.navbar')
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title','SHEA')
    <link rel="icon" href="{{('/img/logoSHEA.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>

<body>
    @section('content')


    <div class="row">
        <div class="col-md4">
            <form action="#" method="GET" class="mb-3">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Cari Psikolog">
                    <button type="submit" class="btn btn-outline-primary"><img src="{{'img/searchglass.png'}}" width="30px"></button>
                </div>
            </form>
        </div>
    </div>



    <div class="container">
        <div class="row row-col-2">
            <div class="col-md-4 border-profile text-center">
                <figure>
                    <img src="{{'img/logoSHEA.png'}}" class="rounded-circle" style="padding-top: 20px;" width="130px">
                    <figcaption class="pSora pt-2" style="text-align: left; font-weight:bold;">Kim Bab, M. Psi, Psikolog</figcaption>
                    <figcaption class="pSora " style="text-align: start; color:#808080;">Psikologi Klinis</figcaption>
                    <button type="button" class="btn btn-outline text-start pSora my-2" style="color : #2D9CDB; border-color : #2D9CDB; border-radius: 7px; float:inline-start">
                        Profile Lengkap</button><br><br>
                </figure>
                <div class="button-group mx-auto">
                    <button type="button" class="text-start hpoppins p-3 mb-2 mr-4" style="background-color:#CBE11E; color : #FFFFFF; border-color : #CBE11E; border-radius: 7px; float:inline-start">
                        Curhat Online</button>
                    <button type="button" class="text-start hpoppins mx-auto mb-2 p-3" style="background-color:#2D9CDB ;color : #FFFFFF; border-color : #2D9CDB; border-radius: 7px; float:inline-start">
                        Janji Temu</button>
                </div>
            </div>

            <div class="col-md-4 border-profile text-center">
                <figure>
                    <img src="{{'img/logoSHEA.png'}}" class="rounded-circle" style="padding-top: 20px;" width="130px">
                    <figcaption class="pSora pt-2" style="text-align: left; font-weight:bold;">Kim Bab, M. Psi, Psikolog</figcaption>
                    <figcaption class="pSora " style="text-align: start; color:#808080;">Psikologi Klinis</figcaption>
                    <button type="button" class="btn btn-outline text-start pSora my-2" style="color : #2D9CDB; border-color : #2D9CDB; border-radius: 7px; float:inline-start">
                        Profile Lengkap</button><br><br>
                </figure>
                <div class="button-group mx-auto">
                    <button type="button" class="text-start hpoppins p-3 mb-2 mr-4" style="background-color:#CBE11E; color : #FFFFFF; border-color : #CBE11E; border-radius: 7px; float:inline-start">
                        Curhat Online</button>
                    <button type="button" class="text-start hpoppins mx-auto mb-2 p-3" style="background-color:#2D9CDB ;color : #FFFFFF; border-color : #2D9CDB; border-radius: 7px; float:inline-start">
                        Janji Temu</button>
                </div>
            </div>

            <div class="col-md-4 border-profile text-center">
                <figure>
                    <img src="{{'img/logoSHEA.png'}}" class="rounded-circle" style="padding-top: 20px;" width="130px">
                    <figcaption class="pSora pt-2" style="text-align: left; font-weight:bold;">Kim Bab, M. Psi, Psikolog</figcaption>
                    <figcaption class="pSora " style="text-align: start; color:#808080;">Psikologi Klinis</figcaption>
                    <button type="button" class="btn btn-outline text-start pSora my-2" style="color : #2D9CDB; border-color : #2D9CDB; border-radius: 7px; float:inline-start">
                        Profile Lengkap</button><br><br>
                </figure>
                <div class="button-group mx-auto">
                    <button type="button" class="text-start hpoppins p-3 mb-2 mr-4" style="background-color:#FFAA4A; color : #FFFFFF; border-color : #FFAA4A; border-radius: 7px; float:inline-start">
                        Sibuk</button>
                    <button type="button" class="text-start hpoppins mx-auto mb-2 p-3" style="background-color:#EAEAEA ;color : #828282; border-color : #EAEAEA; border-radius: 7px; float:inline-start">
                        Janji Temu</button>
                </div>
            </div>

            <div class="col-md-4 border-profile text-center">
                <figure>
                    <img src="{{'img/logoSHEA.png'}}" class="rounded-circle" style="padding-top: 20px;" width="130px">
                    <figcaption class="pSora pt-2" style="text-align: left; font-weight:bold;">Kim Bab, M. Psi, Psikolog</figcaption>
                    <figcaption class="pSora " style="text-align: start; color:#808080;">Psikologi Klinis</figcaption>
                    <button type="button" class="btn btn-outline text-start pSora my-2" style="color : #2D9CDB; border-color : #2D9CDB; border-radius: 7px; float:inline-start">
                        Profile Lengkap</button><br><br>
                </figure>
                <div class="button-group mx-auto">
                    <button type="button" class="text-start hpoppins p-3 mb-2 mr-4" style="background-color:#FFAA4A; color : #FFFFFF; border-color : #FFAA4A; border-radius: 7px; float:inline-start">
                        Sibuk</button>
                    <button type="button" class="text-start hpoppins mx-auto mb-2 p-3" style="background-color:#EAEAEA ;color : #828282; border-color : #EAEAEA; border-radius: 7px; float:inline-start">
                        Janji Temu</button>
                </div>
            </div>

            <div class="col-md-4 border-profile text-center">
                <figure>
                    <img src="{{'img/logoSHEA.png'}}" class="rounded-circle" style="padding-top: 20px;" width="130px">
                    <figcaption class="pSora pt-2" style="text-align: left; font-weight:bold;">Kim Bab, M. Psi, Psikolog</figcaption>
                    <figcaption class="pSora " style="text-align: start; color:#808080;">Psikologi Klinis</figcaption>
                    <button type="button" class="btn btn-outline text-start pSora my-2" style="color : #2D9CDB; border-color : #2D9CDB; border-radius: 7px; float:inline-start">
                        Profile Lengkap</button><br><br>
                </figure>
                <div class="button-group mx-auto">
                    <button type="button" class="text-start hpoppins p-3 mb-2 mr-4" style="background-color:#CBE11E; color : #FFFFFF; border-color : #CBE11E; border-radius: 7px; float:inline-start">
                        Curhat Online</button>
                    <button type="button" class="text-start hpoppins mx-auto mb-2 p-3" style="background-color:#2D9CDB ;color : #FFFFFF; border-color : #2D9CDB; border-radius: 7px; float:inline-start">
                        Janji Temu</button>
                </div>
            </div>

            <div class="col-md-4 border-profile text-center">
                <figure>
                    <img src="{{'img/logoSHEA.png'}}" class="rounded-circle" style="padding-top: 20px;" width="130px">
                    <figcaption class="pSora pt-2" style="text-align: left; font-weight:bold;">Kim Bab, M. Psi, Psikolog</figcaption>
                    <figcaption class="pSora " style="text-align: start; color:#808080;">Psikologi Klinis</figcaption>
                    <button type="button" class="btn btn-outline text-start pSora my-2" style="color : #2D9CDB; border-color : #2D9CDB; border-radius: 7px; float:inline-start">
                        Profile Lengkap</button><br><br>
                </figure>
                <div class="button-group mx-auto">
                    <button type="button" class="text-start hpoppins p-3 mb-2 mr-4" style="background-color:#FF4500; color : #FFFFFF; border-color : #FF4500; border-radius: 7px; float:inline-start">
                        Offline</button>
                    <button type="button" class="text-start hpoppins mx-auto mb-2 p-3" style="background-color:#EAEAEA ;color : #828282; border-color : #EAEAEA; border-radius: 7px; float:inline-start">
                        Janji Temu</button>
                </div>
            </div>
        </div>
    </div>


    <!-- PAGINATION -->
    <div>

    </div>
    <!-- PAGINATION -->
    @endsection
</body>

</html>