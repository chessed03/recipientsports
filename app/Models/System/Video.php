<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{

    use HasFactory;

    protected $table = 'videos';

    const TABLE      = "videos";

    const DELETED    = 0;

    const ALIVE      = 1;

    public static function getAliveVideos()
    {
        $result = null;

        $query  = self::where('status', self::ALIVE)
            ->get()
            ->chunk(2);

        if ( $query ) {

            $result = $query;

        }

        return $result;
    }

    public static function getVideoAliveById( $id )
    {

        $result = null;

        $query  = self::where('id', $id)
            ->first();

        if ( $query ) {

            $result = $query;

        }

        return $result;

    }

}
