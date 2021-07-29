    <div class="movie-card">
        <div class="image">
            <img src="{{'https://image.tmdb.org/t/p/w185/'.$movie['poster_path']}}" />

            <a href="{{route('movies.movieDetails', $movie['id'])}}" class="play-icon">
                <i class="fa fa-play" aria-hidden="true"></i>
            </a>
        </div>
        <div class="card-content">
            <div class="">
                <a href="{{route('movies.movieDetails', $movie['id'])}}">
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