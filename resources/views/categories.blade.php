@extends('layouts.main')


@section('container')
<h1 class="text-center">Post Category</h1>

<div class="container mx-auto mt-10 flex justify-center">
    <div class="flex flex-wrap justify-center">
        @foreach ($categories as $category)
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-4 flex justify-center">
            <div class="card w-full bg-base-100 shadow-xl image-full">
                <figure><img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title text-center">{{ $category->name }}</h2>
                    <p>Select posts according to the post category you are looking for</p>
                    <div class="card-actions justify-end">
                        <a href="/categories/{{ $category->slug }}" class="btn btn-primary">View All Posts</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>



@endsection('container')
