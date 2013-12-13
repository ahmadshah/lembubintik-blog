<?php

use Orchestra\Story\Model\Content as Eloquent;

if ( ! function_exists('latest_posts'))
{
    function latest_posts($take)
    {
        $posts = Eloquent::whereType('post')->latest($take)->get();
        return $posts;
    }
}