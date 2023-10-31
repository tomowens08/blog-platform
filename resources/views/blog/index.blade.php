<!-- resources/views/blog/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Welcome to Our Blog</h1>

    @foreach ($posts as $post)
        <h2><a href="{{ route('blog.show', $post) }}">{{ $post->title }}</a></h2>
        <p>{{ $post->content }}</p>
        <hr>
    @endforeach
@endsection