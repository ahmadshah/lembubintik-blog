<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Personal blog">
        <meta name="author" content="Ahmad Shah Hafizan Hamidin">
        <meta name="keyword" content="laravel, orchestra, php, programming">

        <title>Lembubintik.com</title>

        {{ HTML::style(Orchestra\Theme::to('css/rainbow.css')) }}
        {{ HTML::style(Orchestra\Theme::to('css/style.min.css')) }}

    </head>
    <body>
        @include('orchestra/story::header')
        <div class="container">
            <div class="row">
                @yield('content')
                @include('orchestra/story::footer')
            </div>
        </div>

        {{ HTML::script(Orchestra\Theme::to('js/jquery.js')) }}
        {{ HTML::script(Orchestra\Theme::to('js/bootstrap.min.js')) }}
        {{ HTML::script(Orchestra\Theme::to('js/rainbow-custom.min.js')) }}
        {{ HTML::script(Orchestra\Theme::to('js/app.js')) }}
    </body>
</html>