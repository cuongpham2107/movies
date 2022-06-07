<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use Carbon\Carbon;

class TVsViewModel extends ViewModel
{
    public $tv;

    public  $genres;

    public function __construct($tv,$genres)
    {
        $this->tv = $tv;
        $this->genres = $genres;
    }

    public function tvMovies()
    {
        return $this->formatMovies($this->tv);
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
                'first_air_date' =>  Carbon::parse($movie['first_air_date'])->format('M d, Y'), //chuyển đổi hàng loạt format ngày tháng năm
                'genres'=> $genresFormatted,
            ]);
        });
    }
}
