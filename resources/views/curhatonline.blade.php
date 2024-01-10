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
    <a href="/curhatonline" class="btn hpoppins" style="background-color:#2D9CDB; color:#FFFFFF;" role="button">
        Curhat Online
    </a>
    <a href="/janjitemu" class="btn  hpoppins " style="color: #2D9CDB; border-color:#2D9CDB;" role="button">
        Janji Temu
    </a>
</div>

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
                <a class="pSora no-underline" href="/menu" style="color: #FFFFFF;">Beranda</a>
                </li>
            
                <li class="list-group-item">
                <a class="pSora no-underline" href="/curhat" style="color: #FFFFFF;">Curhat</a>
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

    @endsection
</body>
</html>
