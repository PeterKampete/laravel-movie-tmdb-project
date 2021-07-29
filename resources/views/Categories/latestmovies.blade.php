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
        <div class="container">
            @foreach($latestMovies as $movie)
            @if($loop -> index
            < 2) <div class="movie-card">
                <div class="image">
                    <img src="{{'https://image.tmdb.org/t/p/w185/'.$movie['poster_path']}}" />

                    <a href="{{route('movies.CategoryDetails', $movie['id'])}}" class="play-icon">
                        <i class="fa fa-play" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="card-content">
                    <div class="">

                        <a href="{{route('movies.CategoryDetails', $movie['id'])}}">
                            <h5 class="">{{$movie['title']}}</h5>
                        </a>
                    </div>

                    <div class="">

                        <label>Year</label>
                        <label>{{\Carbon\Carbon::parse($movie['release_date']) -> format('d/m/Y')}}</label>
                    </div>
                    <div class="">

                        <label>Votes</label>
                        <span>{{$movie['vote_average'] *10 .'%'}}</span>
                    </div>

                    <div class="">
                        @foreach($movie['genre_ids'] as $genre)
                        {{$genres->get($genre)}}@if (!$loop->last),
                        @endif
                        @endforeach
                        <h1>Genre</h1>
                    </div>

                </div>
        </div>

        @endif
        @endforeach


    </div>
    </div>


</body>

</html>