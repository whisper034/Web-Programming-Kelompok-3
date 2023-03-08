<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="text-center">
<div class="flex flex-col justify-center items-center fullScreen">
    <div class="logo">
        <img src="{{ asset('/images/logo/WebProgLogo.png') }}" alt="WebProgLogo" class="mx-auto">
    </div>

    <br>

    <div class="font-bold font-poppins text-6xl" style="font-size: 50pt;">
        WELCOME
    </div>

    <br><br>

    <div class="font-bold font-poppins profile-button" style="font-size: 12pt;">
        <a href="/profiles/ariel-sefrian">PROFILES</a>
    </div>
</div>

</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
