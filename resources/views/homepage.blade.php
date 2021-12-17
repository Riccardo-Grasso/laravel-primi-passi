@php
$titolo = "MCU";
@endphp


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titolo }}</title>
</head>

<body>
    <h1>Marvel Cinematic Universe</h1>
    <h2>{{$film}}</h2>

    <ul>
        <li><a href="{{ route('fase1') }}">Fase 1</a></li>
        <li><a href="{{ route('fase2') }}">Fase 2</a></li>
        <li><a href="{{ route('fase3') }}">Fase 3</a></li>
        <li><a href="{{ route('fase4') }}">Fase 4</a></li>
    </ul>

</body>

</html>