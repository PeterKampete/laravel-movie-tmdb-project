       <div class="container">
           <div class="movie-card">
               <img src="{{'https://image.tmdb.org/t/p/w185/'.$movie['poster_path']}}" class="image" />

               <a href="{{route('movies.movieDetails', $movie['id'])}}" class="play-icon">
                   <i class="fa fa-play" aria-hidden="true"></i>
               </a>

               <div class="card-content">
                   <a href="{{route('movies.movieDetails', $movie['id'])}}">
                       <h5 class="">{{$movie['title']}}</h5>
                   </a>

                   <label>Year</label>
                   <label>{{\Carbon\Carbon::parse($movie['release_date']) -> format('d/m/Y')}}</label>

                   <label>Votes</label>
                   <span>{{$movie['vote_average'] *10 .'%'}}</span>


                   @foreach($movie['genre_ids'] as $genre)
                   {{$genres->get($genre)}}@if (!$loop->last),
                   @endif
                   @endforeach
                   <h1>Genre</h1>
               </div>
           </div>