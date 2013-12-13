<?php

Route::get('/', ['uses' => 'Orchestra\Story\Routing\HomeController@showPosts', 'as' => 'base.route']);