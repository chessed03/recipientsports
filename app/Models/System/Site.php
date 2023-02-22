<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{

    use HasFactory;

    public static function getAlivePosts()
    {
        return Post::getAlivePosts();
    }

    public static function getAliveVideos()
    {
        return Video::getAliveVideos();
    }

    public static function getAliveCarouselImages()
    {
        return CarouselImage::getAliveCarouselImages();
    }

}
