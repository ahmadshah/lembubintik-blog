<?php

Route::get('/', ['uses' => 'Orchestra\Story\Routing\HomeController@posts', 'as' => 'base.route']);