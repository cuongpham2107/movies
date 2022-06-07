<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use Carbon\Carbon;

class MovieViewModel extends ViewModel
{
    public $movie;
    
    public $similar;

    public $genres;

    public function __construct($movie,$similar,$genres)
    {
        $this->movie = $movie;

        $this->similar = $similar;

        $this->genres = $genres;
    }

    public function movie()
    {
        return collect($this->movie)->merge([
            'poster_path' => 'https://image.tmdb.org/t/p/w500/'.$this->movie['poster_path'], //gán thêm hàng loạt đường dẫn 
            'vote_average' => $this->movie['vote_average'] * 10 .'%', //chuyển đổi hàng loạt đánh giá
            'release_date' =>  Carbon::parse($this->movie['release_date'])->format('M d, Y'), //chuyển đổi hàng loạt format ngày tháng năm
            'genres' => collect($this->movie['genres'])->pluck('name')->flatten()->implode(', '),
            'crew' => collect($this->movie['credits']['crew'])->take(2),
            'cast' => collect($this->movie['credits']['cast'])->take(5),
            'images' => collect($this->movie['images']['backdrops'])->take(9),

        ]);
    }
    public function similarMovies(){

        return $this->formatMovies($this->similar);//truyền biến vào hàm formatMovies sử dụng chung
    }
    public function genres()
    {
        return collect($this->genres)->mapWithKeys(function ($genre){
            return [$genre['id'] => $genre['name']];
        });
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
