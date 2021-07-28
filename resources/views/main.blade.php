<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <title>MOVIES</title>
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />

</head>

<body>
    <p class="intro">Based from <b><a href="https://dribbble.com/shots/2241918-Movie-Ticket-Card-Sketch-freebie"
                target="_blank">Soumya's Movie Ticket Card</a></b>
    <p>

    <div class="container">

        @foreach($topRatedMovies as $movie)
        @if($loop -> index
        < 4) <x-movie-card :movie="$movie" :genres=$genres />
        @endif
        @endforeach

        <h1>
            NOW PLAYING
        </h1>

        @foreach($nowPlayingMovies as $movie)
        @if($loop -> index
        < 4) <x-movie-card :movie="$movie" :genres=$genres />
        @endif

        @endforeach

    </div>

</body>

</html>