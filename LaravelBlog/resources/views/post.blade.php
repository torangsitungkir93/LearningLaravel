@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-5">{{ $post->title }}</h1>

            <p>By. <a href="/posts?author={{ $post->author->username }}"
                    class="text-decoration-none">{{ $post->author->name; }}</a> in
                <a href="/posts?category={{ $post->category->slug; }}"
                    class="text-decoration-none">{{ $post->category->name; }}</a>
            </p>

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="">

            {!! $post->body; !!}

            <a href="/posts" class="d-block mt-3">Back To Posts</a>
        </div>
    </div>
</div>


@endsection
