@extends('orchestra/story::layout')

@section('content')
<!--container start-->
    <div class="container">
        <div class="row">
            <!--blog start-->
                <div class="col-lg-9 ">
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-lg-2 col-sm-2">
                                <div class="date-wrap">
                                    <span class="date">{{ $page->published_at->format('d') }}</span>
                                    <span class="month">{{ $page->published_at->format('M Y') }}</span>
                                </div>
                            </div>
                            <div class="col-lg-10 col-sm-10">
                                <h1><a href="{{ $page->link }}">{{ $page->title }}</a></h1>
                                {{ $page->body }}
                            </div>
                        </div>
                    </div>
            </div>

            @include('orchestra/story::sidebar')

            <!--blog end-->
        </div>

    </div>
    <!--container end-->
@stop
