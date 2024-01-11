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

    
    <div class="homegutter">
    <div class="container overflow-hidden">

    <!-- PROFILE PSIKOLOG -->
    <!-- PROFILE PSIKOLOG -->
    <!-- PROFILE PSIKOLOG -->

  <div class="row gx-5 px-5 pb-4">

    <div class="col text-center">
    <img src="{{('/img/profile.png')}}" width="130px">
     <div class="ps-4  pt-3 pb-0 pe-2 text-start" style="font-weight: bold;">Kim Bab, M.Psi, Psikolog</div>
        <div class="container text-start">
        <p class="pSora pt-0 pb-2">Psikologi Klinis</p>   
            <div class="row">
                <div class="col mt-4">
                <button class="text-start p-2" href="#" style="color:#2D9CDB; border-color:#2D9CDB; border-radius:5px; background-color:#FFFFFF;">Lihat Profile</button>
                </div>
            
                <div class="col pb-2">
                <button class="text-start p-2 mb-2" href="#" style="color:#2D9CDB; border-color:#2D9CDB; border-radius:5px; background-color:#FFFFFF;">Janji Temu</button>
                <button class="text-start p-2" href="#" style="color:#2D9CDB; border-color:#2D9CDB; border-radius:5px; background-color:#FFFFFF;">Curhat Online</button>             
                </div>
            </div>
        </div>
    </div>
    
    <div class="col text-center">
    <img src="{{('/img/profile.png')}}" width="130px">
        <div class="ps-4  pt-3 pb-0 pe-2 text-start" style="font-weight: bold;">Ram Yeon, M.Psi, Psikolog</div>
            <div class="container text-start">
            <p class="pSora pt-0 pb-2">Psikologi Komunitas</p>   
                <div class="row">
                    <div class="col mt-4">
                    <button class="text-start p-2" href="#" style="color:#2D9CDB; border-color:#2D9CDB; border-radius:5px; background-color:#FFFFFF;">Lihat Profile</button>
                    </div>

                    <div class="col pb-2">
                    <button class="text-start p-2 mb-2" href="#" style="color:#2D9CDB; border-color:#2D9CDB; border-radius:5px; background-color:#FFFFFF;">Janji Temu</button>
                    <button class="text-start p-2" href="#" style="color:#2D9CDB; border-color:#2D9CDB; border-radius:5px; background-color:#FFFFFF;">Curhat Online</button>             
                    </div>

                 </div>

            </div>
    </div>

    <div class="col text-center">
    <img src="{{('/img/profile.png')}}" width="130px">
    <div class="ps-4  pt-3 pb-0 pe-2 text-start" style="font-weight: bold;">KimBul Dak, M.Psi, Psikolog</div>
        <div class="container text-start">
        <p class="pSora pt-0 pb-2">Psikologi Mental</p>   
            <div class="row">
                <div class="col mt-4">
                <button class="text-start p-2" href="#" style="color:#2D9CDB; border-color:#2D9CDB; border-radius:5px; background-color:#FFFFFF;">Lihat Profile</button>
                </div>

                <div class="col pb-2">
                <button class="text-start p-2 mb-2" href="#" style="color:#2D9CDB; border-color:#2D9CDB; border-radius:5px; background-color:#FFFFFF;">Janji Temu</button>
                <button class="text-start p-2" href="#" style="color:#2D9CDB; border-color:#2D9CDB; border-radius:5px; background-color:#FFFFFF;">Curhat Online</button>             
                </div>
            </div>
        </div>
    </div>

  </div>
</div>

</div>

    @include('layouts.footer')
    
    @endsection
</body>
</html>