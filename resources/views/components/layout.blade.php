<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pixel Positions</title>
    <meta charset="UTF-8">
    <meta name="description" content="description limited to 150 characters INCLUDING spaces. just let chatGPT form this with a 150 character limit."/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <meta name="robots" content="noindex,nofollow" /> --}}
    <meta name="author" content="Keyshawn T. Wright" />
    <meta name="copyright" content="Keyshawn T. Wright" />
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
<x-nav>{{$slot}}</x-nav>
<main class="main">{{$slot}}</main>



</body>
</html>


{{--

<a href="#"><img src="{{ Vite::asset('resources/images/logo.svg') }}" alt=""></a>
<img src="https://place-hold.it/42/808080?fontsize=6" alt="">

--}}
