<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ariel's Soft Skills</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color: #e8e8e8;">
<div class="fullScreen grid" style="grid-template-columns: fit-content(100%) auto">
    <div class="fullHeight" style="background-color: black;">
        <img src="{{ asset('/images/profile-images/ariel-sefrian.jpg') }}" alt="ariel sefrian"
             class="p-14 fullHeight object-cover">
    </div>

    <div class="m-11 mt-10">
        <div class="flex flex-col">
            <div class="font-bold font-poppins text-8xl">
                Ariel Sefrian, 20
            </div>

            <br><br>

            <div class="font-poppins text-base text-justify mr-24">
                <div class="text-3xl font-bold mb-5" style="border-bottom: dotted black 2px; width: 100%;">
                    Soft Skills
                </div>
                @php($softskills = array())
                @php(array_push($softskills, "Programming", "Public Speaking", "Problem Solving", "WEABOO"))

                @php($imageLoops = array())
                @php(array_push($imageLoops, 6, 5, 5, 10))
                <table style="width: 100%;">
                    <colgroup>
                        <col style="width: 45%;">
                        <col style="width: 3%;">
                    </colgroup>
                    <tbody>
                    @php($currIndex = 0)
                    @foreach($softskills as $softskillsKey => $softskillsValue)
                        <tr>
                            <td class="text-2xl">{{ $softskillsValue }}</td>
                            <td class="text-2xl">:</td>
                            <td>
                                @for($j = 0; $j < $imageLoops[$currIndex]; $j++)
                                    <div class="inline-block">
                                        <img src="{{ asset('/images/logo/red_star.png') }}" alt="red star" width="25rem">
                                    </div>
                                @endfor
                            </td>
                        </tr>
                        @php($currIndex++)
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <br><br>

        <div class="fixed" style="bottom: 9%; right: 8.75rem;">
            <div class="" style="margin-bottom: 2rem;">
                <div class="profiles-button">
                    <a href="/profiles/ariel-sefrian">Profiles >>></a>
                </div>
            </div>

            <div class="" style="margin-bottom: 2rem;">
                <div class="prev inline-block">
                    <a href="/softskills/rico-tokanto">PREV</a>
                </div>

                <div class="next inline-block">
                    <a href="/softskills/devin-augustin">NEXT</a>
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
