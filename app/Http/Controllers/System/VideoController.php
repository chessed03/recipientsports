<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\System\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{

    public function show( Request $request )
    {

        $video = Video::getVideoAliveById( $request->id );

        return view('system.videos.show', [
            'video' => $video
        ]);

    }

}
