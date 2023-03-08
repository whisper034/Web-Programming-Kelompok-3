<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ariel Sefrian</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color: #e8e8e8;">
<div class="fullScreen grid" style="grid-template-columns: fit-content(100%) auto">
    <div class="fullHeight" style="background-color: black;">
        <img src="{{ asset('/images/profile-images/ariel-sefrian.jpg') }}" alt="ariel sefrian" class="p-14 fullHeight object-cover" style="width: 35rem;">
    </div>

    <div class="m-11 mt-32">
        <div class="flex flex-col">
            <div class="font-bold font-poppins text-8xl">
                TEST NAME, 20
            </div>

            <br><br>

            <div class="font-poppins text-base text-justify mr-24">
                <p>
                    Perkenalkan, nama saya adalah Ariel Sefrian. Saya adalah salah satu mahasiswa dari Universitas Bina Nusantara yang mendaftar ke jurusan Ilmu Komputer dan Statistik. Saya suka dalam ranah Software Engineering karena saya cukup suka dengan mengutak-ngatik codingan, baik itu Frontend atau Backend. Saat ini saya tertarik untuk belajar Cloud Computing karena tempat saya bekerja menggunakan Amazon Web Service sebagai server hostnya.
                </p>

                <br>

                <p>
                    Saya terkadang kurang tidur karena ada banyak kerjaan, mulai dari kerjaan kantor, project-project mata kuliah, sampai dengan mengikuti kelas tambahan di jam 7 malam sampai 9 malam. I need sleep:)
                </p>
            </div>
        </div>

        <br><br>

        <div class="fixed" style="bottom: 16%; right: 8.75rem;">
            <div class="prev inline-block">
                <a href="/profiles/rico-tokanto">PREV</a>
            </div>

            <div class="next inline-block">
                <a href="/profiles/devin-augustin">NEXT</a>
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
