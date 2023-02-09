@extends('layouts.main')

@section('container')

<article >

    <h1 class="mb-5">Post Category : {{ $category }}</h1>


    @foreach ($posts as $post)
    <h2>
        <a href="/posts/{{ $post->slug }}">
            {{ $post->tittle }}
        </a>
    </h2>
    <h5>By :{{ $post->user->name }}</h5>
    <p>{{ $post->excerpt }}</p>
</article>

    @endforeach
@endsection
