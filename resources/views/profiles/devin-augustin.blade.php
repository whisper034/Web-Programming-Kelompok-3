<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devin Augustin</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color: #e8e8e8;">
<div class="fullScreen grid" style="grid-template-columns: fit-content(100%) auto">
    <div class="fullHeight" style="background-color: black;">
        <img src="{{ asset('/images/profile-images/devin-augustin.jpg') }}" alt="ariel sefrian" class="p-14 fullHeight object-cover" style="width: 35rem;">
    </div>

    <div class="m-11 mt-32">
        <div class="flex flex-col">
            <div class="font-bold font-poppins text-8xl">
                Devin Augustin, 21
            </div>

            <br><br>

            <div class="font-poppins text-base text-justify mr-24">
                <p>
                    Perkenalkan, saya Devin Augustin, mahasiswa Universitas Bina Nusantara dari jurusan Computer Science and Statistics. Mata kuliah favorit saya saat ini adalah Data Management and Organizations karena saya senang bermain dengan data dan menemukan berbagai macam insight dari data.  
                </p>

                <br>

                <p>
                    Di dalam waktu luang, saya suka bermain game Valorant. Saya merupakan orang yang cukup kompetitif jadi saya selalu berusaha untuk menang dalam setiap game. Saya juga mempunyai impian untuk menjadi seorang pro player Valorant di kedepannya dan menjadi pemain terbaik di dunia.  
                </p>
            </div>
        </div>

        <br><br>

        <div class="fixed" style="bottom: 16%; right: 8.75rem;">
            <div class="prev inline-block">
                <a href="/profiles/ariel-sefrian">PREV</a>
            </div>

            <div class="next inline-block">
                <a href="/profiles/rico-tokanto">NEXT</a>
            </div>
        </div>

        <div class="fixed" style="bottom: 9%; right: 8.75rem;">
            <div class="home-button">
                <a href="/"><<< Back to Home</a>
            </div>
        </div>
    </div>
</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
