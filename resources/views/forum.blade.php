@extends('layouts.navbar')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title', 'SHEA')
    <link rel="icon" href="{{ '/img/logoSHEA.png' }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</head>

<body>
    @section('content')
    <div class="container-flex m-5">
        <div class="row">
            <div class="col-2">
                <a href="" class="pSora no-underline" style="padding-top:10px; padding-bottom:10px; padding-left:20px; padding-right:20px; background-color: #EAEAEA; color:#828282; font-weight:400px; border-color:#EAEAEA;" type="button">
                    Buat Ruang +
                </a>
            </div>

            <div class="col">
                <form action="#" method="GET" class="">
                    <div class="input-group" style="float:left;">
                        <input type="text" class="" name="search" placeholder="Cari" style="width: 900px;">
                        <button type="submit" class=""><img src="{{'img/searchglass.png'}}" width="30px"></button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-2">
                <figure>
                    <img src="img/topikforum1.png" alt="img_topic" style="padding-top: 10px; padding-bottom: 15px; margin-left:15px;">
                    <figcaption class="pSora" style="padding:5px; overflow:hidden; color:828282;">
                        Kehidupan
                    </figcaption>
                </figure>

                <figure>
                    <img src="img/topikforum2.png" alt="img_topic" style="padding-top: 10px; padding-bottom: 15px; margin-left:15px;">
                    <figcaption class="pSora" style="padding:5px; overflow:hidden; color:828282;">
                        Pendidikan
                    </figcaption>
                </figure>

                <figure>
                    <img src="img/topikforum3.png" alt="img_topic" style="padding-top: 10px; padding-bottom: 15px; margin-left:15px;">
                    <figcaption class="pSora" style="padding:5px; overflow:hidden; color:828282;">
                        Pekerjaan
                    </figcaption>
                </figure>
            </div>

            <div class="col">
                <div class="create-content-forum" style="width: 945px; padding-bottom:100px;">
                    
                </div>
            </div>

        </div>
    </div>
    @endsection
</body>

</html>