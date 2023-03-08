<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rico Tokanto</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color: #e8e8e8;">
<div class="fullScreen grid" style="grid-template-columns: fit-content(100%) auto">
    <div class="fullHeight" style="background-color: black;">
        <img src="{{ asset('/images/profile-images/rico-tokanto.jpg') }}" alt="ariel sefrian" class="p-14 fullHeight object-cover" style="width: 35rem;">
    </div>

    <div class="m-11 mt-20">
        <div class="flex flex-col">
            <div class="font-bold font-poppins text-8xl">
                Rico Frenaldi Tokanto, 20
            </div>

            <br><br>

            <div class="font-poppins text-base text-justify mr-24">
                <p>
                Aloo, Perkenalkan Saya Rico Frenaldi Tokanto, saya merupakan mahasiswa dari Universitas Bina Nusantara Fakultas Computer Science dengan jurusan Computer Science and Statistics. Saat ini saya sedang menjalani perkuliahan semester 6. Saya sangat menyukai mata kuliah Computer Network, karena itu berhubungan dengan cara kita mengalokasikan serta mengatur IP address untuk setiap komputer.
                </p>

                <br>

                <p>
                Saya lebih suka melakukan aktivitas di luar ruangan dibandingkan dengan kegiatan pasif seperti jalan - jalan ke mall, duduk di cafe dan lain sebagainya. Saya sangat menyukai olahraga badminton, bermain game  serta kerap melakukan olahraga angkat beban, karena menurut saya berolahraga itu menjaga tubuh dan pikiran saya tetap sehat.
                </p>
            </div>
        </div>

        <br><br>

        <div class="fixed" style="bottom: 16%; right: 8.75rem;">
            <div class="prev inline-block">
                <a href="/profiles/devin-augustin">PREV</a>
            </div>

            <div class="next inline-block">
                <a href="/profiles/ariel-sefrian">NEXT</a>
            </div>
        </div>

        <div class="fixed" style="bottom: 9%; right: 8.75rem;">
            <div class="home-button">
                <a href="/"><<< Back to Home</a>
            </div>
        </div>
        {{--        <div style="width: 100%; bottom: 0;" class="relative text-right">--}}
        {{--            <div class="prev inline-block">--}}
        {{--                <a href="/profiles/rico-tokanto">PREV</a>--}}
        {{--            </div>--}}

        {{--            <div class="next inline-block">--}}
        {{--                <a href="/profiles/devin-augustin">NEXT</a>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
