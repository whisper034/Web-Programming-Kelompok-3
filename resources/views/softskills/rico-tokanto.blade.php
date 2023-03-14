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
        <img src="{{ asset('/images/profile-images/rico-tokanto.jpg') }}" alt="ariel sefrian" class="p-14 fullHeight object-cover" style="">
    </div>

    <div class="m-11 mt-10">
        <div class="flex flex-col">
            <div class="font-bold font-poppins text-8xl">
                Rico Frenaldi Tokanto, 20
            </div>

            <br><br>

            <div class="font-poppins text-base text-justify mr-24">
                <div class="text-3xl font-bold mb-5" style="border-bottom: dotted black 2px; width: 100%;">
                    Soft Skills
                </div>
                @php($softskillsKey = array())
                @php(array_push($softskillsKey, "Creative", "Muscles", "Handsome AF", "GYM BOI"))

                @php($imageLoops = array())
                @php(array_push($imageLoops, 7, 10, 10, 10))
                <table style="width: 100%;">
                    <colgroup>
                        <col style="width: 45%;">
                        <col style="width: 3%;">
                    </colgroup>
                    <tbody>
                    @for($i = 0; $i < sizeof($softskillsKey); $i++)
                        <tr>
                            <td class="text-2xl">{{ $softskillsKey[$i] }}</td>
                            <td class="text-2xl">:</td>
                            <td>
                                @for($j = 0; $j < $imageLoops[$i]; $j++)
                                    <div class="inline-block">
                                        <img src="{{ asset('/images/logo/red_star.png') }}" alt="red star" width="25rem">
                                    </div>
                                @endfor
                            </td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
        </div>

        <br><br>

        <div class="fixed" style="bottom: 9%; right: 8.75rem;">
            <div class="" style="margin-bottom: 2rem;">
                <div class="profiles-button">
                    <a href="/profiles/rico-tokanto">Profiles >>></a>
                </div>
            </div>

            <div class="" style="margin-bottom: 2rem;">
                <div class="prev inline-block">
                    <a href="/softskills/devin-augustin">PREV</a>
                </div>

                <div class="next inline-block">
                    <a href="/softskills/ariel-sefrian">NEXT</a>
                </div>
            </div>

            <div class="">
                <div class="home-button">
                    <a href="/"><<< Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
