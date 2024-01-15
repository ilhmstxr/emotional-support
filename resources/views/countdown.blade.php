<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>countdown</h1>
    <div id="countdown">
        <span class="hour"></span>
        <span class="minute"></span>
    </div>
    <script src="{{ asset('assets/js/countdown.js') }}"></script>

    <script>
        var time = countdown(new Date(2024, 00, 15, 20, 08));
        // var minute = countdown(new Date(2024, 00, 15, 20)).toString();

        $(document).ready(function() {
            $('#hour').val() = time.minutes
        })
        console.log(hour);
    </script>

</body>

</html>
