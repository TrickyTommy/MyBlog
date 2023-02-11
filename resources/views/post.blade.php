@extends('layouts.main')

@section('container')

<article>

    <h2>{{ $post->tittle }}</h2>
    <h5>{{ $post->user->name }} in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
  {{-- {{ $post->body }} --}}
  {!! $post->body !!}
</article>

<a href="/blog" class="d-block mt-3"> Back to Posts</a>

@endsection
