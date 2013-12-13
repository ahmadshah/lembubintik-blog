@extends('orchestra/story::layout')

@section('content')
<!--container start-->
    <div class="container">
        <div class="row">
            <!--blog start-->
	            <div class="col-lg-9 ">
	            	@foreach ($posts as $post)
	                <div class="blog-item">
	                    <div class="row">
	                        <div class="col-lg-2 col-sm-2">
	                            <div class="date-wrap">
	                                <span class="date">{{ $post->published_at->format('d') }}</span>
	                                <span class="month">{{ $post->published_at->format('M Y') }}</span>
	                            </div>
	                        </div>
	                        <div class="col-lg-10 col-sm-10">
	                            <h1><a href="{{ $post->link }}">{{ $post->title }}</a></h1>
	                            <p>{{ $post->body }}</p>
	                            <br>
	                            <a href="{{ $post->link }}" class="btn btn-danger btn-sm pull-right">Continue Reading</a>
	                        </div>
	                    </div>
	                </div>
	        @endforeach

            </div>
        
            @include('orchestra/story::sidebar')
            
            <!--blog end-->
        </div>

    </div>
    <!--container end-->
@stop
