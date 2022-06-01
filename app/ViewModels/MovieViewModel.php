<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use Carbon\Carbon;

class MovieViewModel extends ViewModel
{
    public $movie; 

    public function __construct($movie)
    {
        $this->movie = $movie;
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

}
