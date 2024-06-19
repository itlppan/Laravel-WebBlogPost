@extends('layouts.main')


@section('container')
<h1 class="mb-12 mt-0 text-center text-5xl font-bold">{{ $title }}</h1>
<div class="row mb-3 flex flex-wrap justify-center">
    <div class="col-md-6">
        <form action="/posts">
            <div class="form-control mb-3">
                <div class="input-group w-full">
                    <input type="text" placeholder="Search..." name="search" value="{{ request('search') }}" class="input input-bordered">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>
@if ($posts->count())
<div class="card mb-3" data-theme="synthwave">
    <img src="https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.jpg" style="width: 1550px; height:400px;" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h5 class="card-title">{{ $posts[0]->title }}</h5>
      <p>By <a class="text-decoration-none text-violet-400 hover:text-violet-700" href="/author/{{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a> in <a class="text-decoration-none text-violet-400 hover:text-violet-700" href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a></p>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <a class="text-decoration-none btn btn-primary " href="/posts/{{ $posts[0]->slug }}">Read More...</a>
      <p class="card-text"><small class="text-body-secondary">Last updated {{ $posts[0]->created_at->diffForHumans() }}</small></p>
    </div>
  </div>
  <div class="container flex justify-center mr-9">
    <div class="flex flex-wrap mr-3">
        @foreach ($posts->skip(1) as $post)
            <div class="w-full md:w-1/3 px-1 mb-3">
                <div class="card w-96 glass" data-theme="synthwave">
                    <div class="absolute top-0 left-0 px-3 py-2 text-white bg-black bg-opacity-60 rounded-md">
                        <a href="/categories/{{ $post->category->slug }}" class="text-white no-underline">
                            {{ $post->category->name }}
                        </a>
                    </div>
                    <figure>
                        <img class="w-full h-48 object-cover rounded-md" src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="car!"/>
                    </figure>
                    <div class="card-body p-4">
                        <h2 class="card-title text-lg font-bold">{{ Str::limit($post->title, 50) }}</h2>
                        <p class="text-white">
                            By <a class="text-violet-400 hover:text-violet-700 no-underline" href="/author/{{ $post->user->username }}">{{ $post->user->name }}</a>
                            In {{ $post->created_at->diffForHumans() }}
                        </p>
                        <p>{{ Str::limit($post->excerpt, 100) }}</p>
                        <div class="card-actions flex justify-end">
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                        </div>
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
