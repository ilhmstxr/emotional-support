<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','SHEA')</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoJtKh7z7lGz7fuP4F8nfdFvAOA6Gg/z6Y5J6XqqyGXYM2ntX88WpH3jBc3pL+eEwM6YQ==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqFjcJ6pajs/rfdfs3SO+kD4Ck5BdPtF+to8xMp9Mvc9Dw1n9b4d0nqN2l0kYVmU" crossorigin="anonymous"></script>
</head>
<body>

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
                <a class="pSora no-underline" href="/forum" style="color: #FFFFFF;">Forum</a>
                </li>

                <li class="list-group-item">
                <a class="pSora no-underline" href="/topup" style="color: #FFFFFF;">Top Up</a>
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
    

</div>

</body>
</html>