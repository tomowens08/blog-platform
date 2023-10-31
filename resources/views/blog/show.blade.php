<!-- resources/views/blog/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>

    <!-- Add comments section and other details if needed -->
@endsection