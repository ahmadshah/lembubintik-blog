@extends('orchestra/story::layout')

@section('content')

<div class="col-md-7 col-lg-8 col-lg-offset-2">
    <article class="article">
        <header class="header">
            <h2>{{ $page->title }}</h2>
            <p class="metadata">
                Posted by Ahmad Shah Hafizan Hamidin on {{ $page->published_at->format('d/m/Y') }}
            </p>
        </header>
        <section class="content">
            <p>{{ $page->body }}</p>
        </section>
        <!--
        <p class="share pull-right">
            <a href="#" role="tooltip" data-placement="top" data-original-title="Share on Facebook"><i class="fa fa-facebook-square"></i></a>
            <a href="#" role="tooltip" data-placement="top" data-original-title="Share on Twitter"><i class="fa fa-twitter-square"></i></a>
        </p>
        -->
        <div class="clearfix"></div>
        <hr>
        @include('orchestra/story::_disqus')
    </article>
</div>

@stop
