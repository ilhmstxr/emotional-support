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
                        <input type="text" class="" name="search" placeholder="  Cari" style="width: 900px;">
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

                <div class="create-content-forum" style="position: relative; width:945px; padding-bottom:10px; margin-bottom:20px;">
                    <div class="create-content pt-3 pe-2 pb-0 ps-3">
                        <img src="{{'img/profile2.png'}}" alt="profile2" width="30px">
                        <input class="pSora" type="message" placeholder="Apa yang ingin anda tanyakan atau bagikan?" style="width: 800px; background-color:#EAEAEA; color:#EAEAEA; border-color:#828282; border-radius:6px; padding-left:10px; margin-left:10px;">
                    </div>
                    <div class="create-content pt-2 pe-2 pb-0 ps-3">
                        <div class="m-2 ms-5" >
                            <a href="#" type="button" style="text-decoration: none; color:#828282;">
                                <img src="{{'img/tanya.png'}}" alt="tanya" width="20px"> <span>Tanya</span>
                            </a>
                            <a href="#" type="button" style="text-decoration: none; color:#828282;">
                                <img src="{{'img/kirim.png'}}" alt="jawab" width="20px"> <span>Jawab</span>
                            </a>
                            <a href="#" type="button" style="text-decoration: none; color:#828282;">
                                <img src="{{'img/kiriman.png'}}" alt="kiriman" width="20px"> <span>Kiriman</span>
                            </a>
                        </div>
                    </div>



                </div>

                <div class="create-content-forum" style="width: 945px; padding-bottom:100px; position:relative;">

                    <div class="create-content pt-2 pe-2 pb-0 ps-3">
                        <img src="{{'img/profile2.png'}}" alt="profile2" width="30px">
                        <p class="pSora" style="font-weight:bold; padding-left:10px; padding-top:20px;">Mariadi Hae Hae</p>
                        <p style="color: #828282; padding-top:10px; padding-left:2px; padding-right:2px;"><b>.</b></p>
                        <a class="" style="text-decoration:none; font-weight:700; color:#2D9CDB;" type="button" href="">Ikuti
                        </a>
                    </div>

                    <div class="create-content">
                        <p class="pSora" style="font-weight:300; color:#828282; padding-left:55px;">Pengangguran</p>
                        <p class="pSora" style="color: #828282; padding-bottom:5px; padding-left:4px; padding-right:3px;"><b>.</b></p>
                        <p class="pSora" style="color: #828282; padding-top:3px; padding-left:2px; padding-right:2px;">3 Jam</p>
                    </div>

                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, ducimus!</p>
                    </div>

                    <div class="react-content">
                        <img src="{{'img/thumb_up.png'}}" alt="like" style="padding-right:5px; padding-left:6px;"> <span>5</span>
                        <img src="{{'img/thumb_down.png'}}" alt="dislike" style="padding-right:5px; padding-left:6px;"> <span>1</span>
                        <img src="{{'img/maps_ugc.png'}}" alt="dislike" style="padding-right:5px; padding-left:6px;"> <span>1</span>
                        <img src="{{'img/autorenew.png'}}" alt="" style="padding-right:5px; padding-left:6px;"> <span>1</span>
                    </div>

                </div>
            </div>

        </div>
    </div>
    @endsection
</body>

</html>