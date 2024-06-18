@extends('layouts.main')

@section('container')
<div class="container-fluid bg-dark text-center mt-3 justify-content-center text-light p-3">
    <div class="container bg-dark p-md-5">
        <h1 class="display-4">Welcome To My Blog</h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="row">
            <div class="col-md-6 mb-3">
                <button class="btn btn-primary btn-lg btn-block" type="button">Custom button</button>
            </div>
            <div class="col-md-6">
                <button class="btn btn-secondary btn-lg btn-block" type="button">Secondary</button>
            </div>
        </div>
    </div>
</div>
@endsection
