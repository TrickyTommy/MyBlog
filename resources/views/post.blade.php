@extends('layouts.main')

@section('container')

<article>

    <h2>{{ $post->tittle }}</h2>
    <h5>{{ $post->author }} in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
  {{-- {{ $post->body }} --}}
  {!! $post->body !!}
</article>

<a href="/blog"> Back to Posts</a>

@endsection