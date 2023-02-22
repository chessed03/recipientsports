<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    const TABLE      = "posts";

    const DELETED    = 0;

    const ALIVE      = 1;

    public static function getAlivePosts()
    {

        $result = null;

        $query  = self::where('status', self::ALIVE)
            ->get();

        if ( $query ) {

            $result = $query;

        }

        return $result;

    }

    public static function getPostAliveBySlug( $slug )
    {

        $result = null;

        if ( $slug ) {

            $query = self::where('slug', $slug)
                ->where('status', self::ALIVE)
                ->first();

            if ( $query ) {

                $result = $query;

            }

        }

        return $result;

    }

}
