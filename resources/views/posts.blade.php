@extends('layouts.main')


@section('container')
<h1 class="mb-3 text-center">{{ $title }}</h1>
<div class="row mb-3 justify-content-center">
    <div class="col-md-6">
        <form action="/posts">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Search</button>
              </div>
        </form>
    </div>
</div>
@if ($posts->count())
<div class="card mb-3">
    <img src="https://placehold.co/1200x400/png" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h5 class="card-title">{{ $posts[0]->title }}</h5>
      <p>By <a class="text-decoration-none" href="/author/{{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a></p>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <a class="text-decoration-none btn btn-primary " href="/posts/{{ $posts[0]->slug }}">Read More...</a>
      <p class="card-text"><small class="text-body-secondary">Last updated {{ $posts[0]->created_at->diffForHumans() }}</small></p>
    </div>
  </div>
  <div class="container">
      <div class="row">
          @foreach ($posts->skip(1) as $post )
          <div class="col-md-4 mb-3">
              <div class="card">
                  <div class="position-absolute px-3 py-2 text-white" style="background-color: rgb(0, 0, 0,0.6)"><a class="text-decoration-none text-white" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></div>
                  <img src="https://placehold.co/500x500/png" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p class="text-body-secondary">By <a class="text-decoration-none" href="/author/{{ $post->user->username }}">{{ $post->user->name }}</a> {{ $post->created_at->diffForHumans() }} </p>
                      <p class="card-text">{{ $post->excerpt }}</p>
                      <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More...</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
    <p class=" text-center fs-4">No Post Found</p>
  @endif
@endsection('container')
