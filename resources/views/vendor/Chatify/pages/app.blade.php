@extends('layouts.navbar')
@section('content')
    @include('Chatify::layouts.headLinks')
    <div class="messenger">
        {{-- ----------------------Users/Groups lists side---------------------- --}}
        <div class="messenger-listView {{ !!$id ? 'conversation-active' : '' }}">
            {{-- Header and search bar --}}
            <div class="m-header">
                <nav>
                    <a href="#"><i class="fas fa-inbox"></i> <span class="messenger-headTitle">Pesan</span> </a>
                    {{-- header buttons --}}
                    <nav class="m-header-right">
                        {{-- <a href="#"><i class="fas fa-cog settings-btn"></i></a> --}}
                        <a href="#" class="listView-x"><i class="fas fa-times"></i></a>
                    </nav>
                </nav>
            </nav>
            {{-- Search input --}}
            <input type="text" class="messenger-search" placeholder="Cari" />
            {{-- Tabs --}}
            {{-- <div class="messenger-listView-tabs">
                <a href="#" class="active-tab" data-view="users">
                    <span class="far fa-user"></span> Contacts</a>
            </div> --}}
        </div>

        {{-- ----------------------Messaging side---------------------- --}}
        <div class="messenger-messagingView">
            {{-- header title [conversation name] amd buttons --}}
            <div class="m-header m-header-messaging">
                <nav class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                    {{-- header back button, avatar and user name --}}
                    <div class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                        {{-- <a href="#" class="show-listView"><i class="fas fa-arrow-left"></i></a> --}}
                        <div class="avatar av-s header-avatar"
                            style="margin: 0px 10px; margin-top: -5px; margin-bottom: -5px;">
                        </div>
                        <div class="pSora row"
                            style="background-color: #2D9CDB; color:#FFFFFF; display:flex; margin-left:5px; padding-top:15px; border-radius:7px;">
                            <p class="px-1">Selesai Dalam</p>
                            <div class="mx-2">
                                <img src="{{ 'img/schedule.png' }}" alt="" class="">

                                <!-- Countdown -->

                                <div class="col" id="hour"></div>
                                <div class="col" id="minute"></div>
                                <div class="col" id="second"></div>

                                <!-- Countdown -->

                            </div>
                        </div>
                    </div>
                    {{-- header buttons --}}
                    <nav class="m-header-right">
                        {{-- <a href="#" class="add-to-favorite"><i class="fas fa-star"></i></a>
                        <a href="/"><i class="fas fa-home"></i></a>
                        <a href="#" class="show-infoSide"><i class="fas fa-info-circle"></i></a> --}}
                    </nav>
                </nav>
                {{-- Internet connection --}}
                <div class="internet-connection">
                    <span class="ic-connected">Connected</span>
                    <span class="ic-connecting">Connecting...</span>
                    <span class="ic-noInternet">No internet access</span>
                </div>
            </div>
        </div>
    </div>

    {{-- ----------------------Messaging side---------------------- --}}
    <div class="messenger-messagingView">
        {{-- header title [conversation name] amd buttons --}}
        <div class="m-header m-header-messaging">
            <nav class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                {{-- header back button, avatar and user name --}}
                <div class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                    <a href="#" class="show-listView"><i class="fas fa-arrow-left"></i></a>
                    <div class="avatar av-s header-avatar" style="margin: 0px 10px; margin-top: -5px; margin-bottom: -5px;">
                    </div>
                    <div class="pSora" style="background-color: #2D9CDB; color:#FFFFFF; display:inline-flex; margin-left:5px; padding-top:16px; border-radius:7px;">
                        <p class="ps-2 pe-1">Selesai Dalam</p>
                        <div class="mx-2">
                            <img src="{{ 'img/schedule.png' }}" alt="" class="">
                            <div class="" style="display:inline-flex;">
                                <div style="margin:5px; margin-top:0px; margin-right:0px;">
                                    <span id="hour"></span><span>:</span>
                                </div>
                                <div style="margin:5px; margin-top:0px; margin-right:0px; margin-left:0px;">
                                    <span id="minute"></span><span>:</span>
                                </div>
                                <div style="margin:5px; margin-top:0px; margin-left:0px;">
                                    <span id="second"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        {{-- header buttons --}}
        <div>
            <nav class="m-header-right">
                <a href="#" class="add-to-favorite"><i class="fas fa-star"></i></a>
                <a href="/"><i class="fas fa-home"></i></a>
                <a href="#" class="show-infoSide"><i class="fas fa-info-circle"></i></a>
            </nav>
            </nav>
            {{-- Internet connection --}}
            <div class="internet-connection">
                <span class="ic-connected">Connected</span>
                <span class="ic-connecting">Connecting...</span>
                <span class="ic-noInternet">No internet access</span>
            </div>
        </div>
        <!-- </div> -->

        {{-- Messaging area --}}
        <div class="m-body messages-container app-scroll">
            <div class="messages">
                <p class="message-hint center-el"><span>Tolong Pilih Chat Yang Anda Inginkan</span></p>
            </div>
            {{-- Typing indicator --}}
            <div class="typing-indicator">
                <div class="message-card typing">
                    <div class="message">
                        <span class="typing-dots">
                            <span class="dot dot-1"></span>
                            <span class="dot dot-2"></span>
                            <span class="dot dot-3"></span>
                        </span>
                    </div>
                </div>
            </div>

        </div>
        {{-- Send Message Form --}}
        @include('Chatify::layouts.sendForm')
    </div>
    {{-- ---------------------- Info side ---------------------- --}}
    <div class="messenger-infoView app-scroll">
        {{-- nav actions --}}
        <nav>
            <p>User Details</p>
            <a href="#"><i class="fas fa-times"></i></a>
        </nav>
        {!! view('Chatify::layouts.info')->render() !!}
    </div>
</div>

<script src="{{ asset('assets/js/countdown.js') }}"></script>
<script src="{{ asset('assets/js/jquery-3.7.1.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function cek() {
        Swal.fire({
            title: 'Waktu Habis',
            text: 'Sesi telah berakhir',
            icon: 'success',
            confirmButtonText: 'kembali ke dashboard'
        })
    }


    function cekValue() {
        var value = $('#value').val();
        let rent;

        if (value != 0) {
            rent = value * 60
            console.log(rent);
            refreshContent(rent)
        }
        // console.log(value);
    }

    setInterval(refreshContent, 999);

    function refreshContent(rent) {

        // get currentDate

        var time = new Date();
        let year = time.getFullYear();
        let month = time.getMonth() + 1;
        let today = time.getDate();
        let hours = time.getHours();
        let minutes = time.getMinutes();
        let seconds = time.getSeconds();
        const date = {
            year,
            month,
            today,
            hours,
            minutes,
            seconds
        }
        // console.log(date);


        // set currentDate

        var time = countdown(new Date(2024, 00, 18, 21, 25, 59));

        if (time.hours < 10) {
            $('#hour').text("0" + time.hours)
        } else {
            $('#hour').text(time.hours)
        }

        if (time.minutes < 10) {
            $('#minute').text("0" + time.minutes)
        } else {
            $('#minute').text(time.minutes)
        }

        if (time.seconds < 10) {
            $('#second').text("0" + time.seconds)
        } else {
            $('#second').text(time.seconds)
        }


        let timeout = false;
        // let hours = document.getElementById("hour").innerHTML;
        // let minutes = document.getElementById("minute").innerHTML;
        // let seconds = document.getElementById("second").innerHTML;
        let hour = time.hours;
        let minute = time.minutes;
        let second = time.seconds;

        if (hour == 0 & minute == 0 & second == 0) {
            // console.log("done");
            Swal.fire({
                title: 'Error!',
                text: 'Do you want to continue',
                icon: 'error',
                confirmButtonText: 'kembali ke dashboard'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "/menu"
                } else {}
            });
        }
        // console.log("h" + time.hours);
        // console.log("m" + time.minutes);
        // console.log("s" + time.seconds);
        // console.log(hours);
        // console.log(minutes);
        // console.log(seconds);

    }
</script>


        function cekValue() {
            var value = $('#value').val();
            let rent;

            if (value != 0) {
                rent = value * 60
                console.log(rent);
                refreshContent(rent)
            }
            // console.log(value);
        }

        setInterval(refreshContent, 999);

        function refreshContent(rent) {

            // get currentDate

            var time = new Date();
            let year = time.getFullYear();
            let month = time.getMonth() + 1;
            let today = time.getDate();
            let hours = time.getHours();
            let minutes = time.getMinutes();
            let seconds = time.getSeconds();
            const date = {
                year,
                month,
                today,
                hours,
                minutes,
                seconds
            }
            // console.log(date);


            // set currentDate

            var time = countdown(new Date(2024, 00, 18, 21, 25, 59));

            if (time.hours < 10) {
                $('#hour').text("0" + time.hours)
            } else {
                $('#hour').text(time.hours)
            }

            if (time.minutes < 10) {
                $('#minute').text("0" + time.minutes)
            } else {
                $('#minute').text(time.minutes)
            }

            if (time.seconds < 10) {
                $('#second').text("0" + time.seconds)
            } else {
                $('#second').text(time.seconds)
            }


            let timeout = false;
            // let hours = document.getElementById("hour").innerHTML;
            // let minutes = document.getElementById("minute").innerHTML;
            // let seconds = document.getElementById("second").innerHTML;
            let hour = time.hours;
            let minute = time.minutes;
            let second = time.seconds;

            if (hour == 0 & minute == 0 & second == 0) {
                Swal.fire({
                    title: 'Waktu Habis',
                    text: 'Sesi telah berakhir',
                    icon: 'success',
                    confirmButtonText: 'kembali ke dashboard'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "/menu"
                    } else {}
                });
            }
            // console.log("h" + time.hours);
            // console.log("m" + time.minutes);
            // console.log("s" + time.seconds);
            // console.log(hours);
            // console.log(minutes);
            // console.log(seconds);

        }
    </script>


    @include('Chatify::layouts.modals')
    @include('Chatify::layouts.footerLinks')
@endsection
