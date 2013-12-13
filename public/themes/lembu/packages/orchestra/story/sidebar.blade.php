<div class="col-lg-3">
    <div class="blog-side-item">

        <div class="blog-post">
            <h3>Latest Blog Post</h3>

            @foreach(latest_posts(5) as $post)
                <div class="media">
                    <div class="media-body">
                        <h5 class="media-heading">
                            <a href="{{ $post->link }}">{{ $post->title }}</a>
                        </h5>
                        <p>
                            {{ Str::limit($post->body) }}
                        </p>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</div>