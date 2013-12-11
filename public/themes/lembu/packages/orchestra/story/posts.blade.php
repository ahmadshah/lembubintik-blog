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
	                            <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
	                            <a href="blog_detail.html" class="btn btn-danger">Continue Reading</a>
	                        </div>
	                    </div>
	                </div>
	        @endforeach

            </div>

            <div class="col-lg-3">
                <div class="blog-side-item">

                    <div class="blog-post">
                        <h3>Latest Blog Post</h3>
                        <div class="media">
                            <a class="pull-left" href="javascript:;">
                                <img class=" " src="img/blog/blog-thumb-1.jpg" alt="">
                            </a>
                            <div class="media-body">
                                <h5 class="media-heading"><a href="javascript:;">02 May 2013 </a></h5>
                                <p>
                                    Donec id elit non mi porta gravida at eget metus amet int
                                </p>
                            </div>
                        </div>
                        <div class="media">
                            <a class="pull-left" href="javascript:;">
                                <img class=" " src="img/blog/blog-thumb-2.jpg" alt="">
                            </a>
                            <div class="media-body">
                                <h5 class="media-heading"><a href="javascript:;">02 May 2013 </a></h5>
                                <p>
                                    Donec id elit non mi porta gravida at eget metus amet int
                                </p>
                            </div>
                        </div>
                        <div class="media">
                            <a class="pull-left" href="javascript:;">
                                <img class=" " src="img/blog/blog-thumb-3.jpg" alt="">
                            </a>
                            <div class="media-body">
                                <h5 class="media-heading"><a href="javascript:;">02 May 2013 </a></h5>
                                <p>
                                    Donec id elit non mi porta gravida at eget metus amet int
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <!--blog end-->
        </div>

    </div>
    <!--container end-->
@stop
