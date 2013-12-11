<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mosaddek">
        <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>FlatLab Frontend | Blog</title>

        {{ HTML::style(Orchestra\Theme::to('css/bootstrap.min.css')) }}
        {{ HTML::style(Orchestra\Theme::to('css/theme.css')) }}
        {{ HTML::style(Orchestra\Theme::to('css/bootstrap-reset.css')) }}
        {{ HTML::style(Orchestra\Theme::to('assets/font-awesome/css/font-awesome.css')) }}
        {{ HTML::style(Orchestra\Theme::to('css/style.css')) }}
        {{ HTML::style(Orchestra\Theme::to('css/style-responsive.css')) }}

    </head>
    <body>
        @include('orchestra/story::header')
        @yield('content')
        @include('orchestra/story::footer')
    </body>
</html>
