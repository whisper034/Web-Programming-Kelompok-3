<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @include('main.greetings')
</head>
<body class="text-center">
<div class="fullScreen grid grid-cols-2 items-center">
    <div class="m-5">
        <br><br><br>

        <div class="text-6xl font-poppins font-bold">
            <div id="time"></div>
        </div>

        <br>

        <div class="text-3xl font-poppins">
            <div id="date"></div>
        </div>

        <br>

        <div class="text-xl font-poppins">
            Today is <div id="day" class="inline-block font-bold"></div>. Please don't forget today's day.
        </div>

        <br>

        <div class="text-xl font-poppins font-bold">
            @php($nowTime = now()->toTimeString('minute'))
            @php($hour = explode(':', $nowTime))
            @if ((int)$hour[0] < 12)
                @yield('morning')
            @elseif ((int)$hour[0] < 15)
                @yield('day')
            @elseif ((int)$hour[0] < 18)
                @yield('afternoon')
            @elseif ((int)$hour[0] < 21)
                @yield('evening')
            @else
                @yield('night')
            @endif
        </div>
    </div>

    <div class="m-5" style="">
        <div class="logo">
            <img src="{{ asset('/images/logo/WebProgLogo.png') }}" alt="WebProgLogo" class="mx-auto">
        </div>

        <br>

        <div class="font-bold font-poppins text-6xl" style="font-size: 50pt;">
            WELCOME
        </div>

        <br><br><br>

        <div class="flex justify-center">
            <div class="font-bold font-poppins profile-button mr-3" style="font-size: 12pt;">
                <a href="/profiles/ariel-sefrian">PROFILES</a>
            </div>

            <div class="font-bold font-poppins softskill-button" style="font-size: 12pt;">
                <a href="/softskills/ariel-sefrian">SOFTSKILLS</a>
            </div>
        </div>

    </div>
</div>


</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
