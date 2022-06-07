<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use Carbon\Carbon;

class HomeViewModel extends ViewModel
{
    public $popularMovies;
    public $nowPlayingMovies;
    public $genres;
    public $topRated;

    public function __construct($popularMovies,$nowPlayingMovies,$genres, $topRated)
    {
        $this->popularMovies = $popularMovies;

        $this->nowPlayingMovies = $nowPlayingMovies;

        $this->genres = $genres;

        $this->topRated = $topRated;
    }

    public function popularMovies(){

        return $this->formatMovies($this->popularMovies);//truyền biến vào hàm formatMovies sử dụng chung
    }

    public function nowPlayingMovies(){

       return $this->formatMovies($this->nowPlayingMovies);//truyền biến vào hàm formatMovies sử dụng chung
    }

    public function topRated(){

        return $this->formatMoviesTopRated($this->topRated);
    }
     
    public function genres()
    {
        return collect($this->genres)->mapWithKeys(function ($genre){
            return [$genre['id'] => $genre['name']];
        });
    }
    private function formatMoviesTopRated($movies){
        return collect($movies)->map(function($movie){
            $genresFormatted = collect($movie['genre_ids'])->mapWithKeys(function($value){
                
                return  [$value =>$this->genres()->get($value)];
            })->implode(', ');


            return collect($movie)->merge([
                'backdrop_path' => 'https://image.tmdb.org/t/p/w1280/'.$movie['backdrop_path'], //gán thêm hàng loạt đường dẫn 
                'vote_average' => $movie['vote_average'] * 10 .'%', //chuyển đổi hàng loạt đánh giá
                'release_date' =>  Carbon::parse($movie['release_date'])->format('M d, Y'), //chuyển đổi hàng loạt format ngày tháng năm
                'genres'=> $genresFormatted,
            ]);
        })->random();
    }
    private function formatMovies($movies){
        // @foreach ($movie['genre_ids'] as $value) {{ $genres->get($value) }} @if (!$loop->last) ,@endif@endforeach

        return collect($movies)->map(function($movie){
            $genresFormatted = collect($movie['genre_ids'])->mapWithKeys(function($value){
                
                return  [$value =>$this->genres()->get($value)];
            })->implode(', ');


            return collect($movie)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'], //gán thêm hàng loạt đường dẫn 
                'vote_average' => $movie['vote_average'] * 10 .'%', //chuyển đổi hàng loạt đánh giá
                'release_date' =>  Carbon::parse($movie['release_date'])->format('M d, Y'), //chuyển đổi hàng loạt format ngày tháng năm
                'genres'=> $genresFormatted,
            ])->only([
                'poster_path','id','genre_ids','title','vote_average','overview','release_date','genres',
            ]);
        });
    }
}
