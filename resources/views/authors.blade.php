@extends('layouts.main')


@section('container')
<h1>Post Authors</h1>
@foreach ($authors as $author )
    <ul>
        <li>
            <h2><a href="/author/{{ $author->username }}">{{ $author->name}}</a></h1>
        </li>
    </ul>
@endforeach
@endsection('container')
