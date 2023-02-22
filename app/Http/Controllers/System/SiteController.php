<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\System\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index( Request $request )
    {

        $carousel_images = Site::getAliveCarouselImages();

        $posts           = Site::getAlivePosts();

        $videos          = Site::getAliveVideos();

        return view('system.sites.index', [
            'carousel_images' => $carousel_images,
            'posts'           => $posts,
            'videos'          => $videos
        ]);

    }


}
