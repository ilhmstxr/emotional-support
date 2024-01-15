<!DOCTYPE html>
<html lang="en">
@php
    App\Http\Controllers\TransactionController
@endphp
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>countdown</h1>
    <div class="input">
        <label for="">berapa sesi?</label>
        <form action="{{ route('transaction.store') }}" method="POST">
            @csrf
            <input type="hidden" value="online" name="tipe">
            <input type="number" value="1" id="value" name="value">
            <button onclick="cekValue()" type="submit">sesi mbot</button>
        </form>
    </div>
    <div id="countdown">
        <span class="hour"></span>
        <span class="minute"></span>
        <span class="second"></span>
        {{-- <span class="time"></span> --}}
    </div>
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.7.1.js') }}"></script>

    <script>
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
            {
                var time = new Date();
                let year = time.getFullYear();
                let month = time.getMonth() + 1;
                let today = time.getDate();
                let hours = time.getHours();
                let minutes = time.getMinutes();
                let second = time.getSeconds();
                const date = {
                    year,
                    month,
                    today,
                    hours,
                    minutes,
                    second
                }
                console.log(date);
            }

            // set currentDate
            {
                var time = countdown(new Date(2024, 00, 15, 20, 48));

                if (time.hours < 10) {
                    $('.hour').text("0" + time.hours)
                } else {
                    $('.hour').text(time.hours)
                }

                if (time.minutes < 10) {
                    $('.minute').text("0" + time.minutes)
                } else {
                    $('.minute').text(time.minutes)
                }

                if (time.seconds < 10) {
                    $('.second').text("0" + time.seconds)
                } else {
                    $('.second').text(time.seconds)
                }
            }
        }
    </script>

</body>

</html>
