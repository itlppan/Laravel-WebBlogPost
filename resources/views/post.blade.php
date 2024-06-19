@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-5">{{ $post->title }}</h1>
            <p>By <a class="text-decoration-none" href="/author/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <img src="https://placehold.co/1200x400/png" alt="" class="img-fluid">
        </article class="my-3 fs-5">
            {!! $post->body !!}
            <article>
            <a href="/posts" class="text-sky-400 after:content-['_↗'] ... hover:text-sky-700">Back To Post</a>
        </div>
    </div>
</div>
@endsection
