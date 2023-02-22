<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarouselImage extends Model
{
    use HasFactory;

    protected $table = 'carousel_images';

    const TABLE      = "carousel_images";

    const DELETED    = 0;

    const ALIVE      = 1;

    public static function getAliveCarouselImages()
    {
        $result = null;

        $query  = self::where('status', self::ALIVE)
            ->get();

        if ( $query ) {

            $result = $query;

        }

        return $result;
    }

}
