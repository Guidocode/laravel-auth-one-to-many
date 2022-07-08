@extends('layouts.admin')

@section('content')

    <div class="container">
        <h2>{{ $post->title }}</h2>

        <img class="img-fluid" src="{{ $post->image }}" alt="{{ $post->title }}">

        <p>{{ $post->description }}</p>
    </div>

@endsection
