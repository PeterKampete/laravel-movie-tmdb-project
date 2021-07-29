<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class MovieCategoriesController extends Controller
{
    public function getLatestmovies()
    {

      $latestMovies = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/movie/popular')->json()['results'];

       $genresArray = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/genre/movie/list')->json()['genres'];

        $genres = collect($genresArray)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
    });

    return view('Categories/latestmovies', [
        'latestMovies' => $latestMovies,
        'genres' => $genres,

    ]);
}

 public function show($id)
    {
        $movie = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/movie/' . $id . '?append_to_response=credits,videos,images')->json()['genres'];

        return view('Categories\latestmovies', [
            'movie' => $movie,
            //  'latestMovies' => $latestMovies,
            // 'popularMovies' => $popularMovies,
            // 'upcomingMovies' => $upcomingMovies,
        ]);
    }

}