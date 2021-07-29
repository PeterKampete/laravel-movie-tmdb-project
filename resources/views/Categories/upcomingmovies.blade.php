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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />

</head>

<body>
    <div>
        <x-header-navigation />
        <div class="container">
            @foreach($upcomingMovies as $movie)
            @if($loop -> index
            < 2) <x-movie-card :movie="$movie" :genres=$genres />
            @endif
            @endforeach

            <!-- <h1>
                NOW PLAYING
            </h1>
    
            @foreach($nowPlayingMovies as $movie)
            @if($loop -> index
            < 2) <x-movie-card :movie="$movie" :genres=$genres />
            @endif
    
            @endforeach -->

        </div>
    </div>


</body>

</html>