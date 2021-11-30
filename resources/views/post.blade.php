@extends('layouts.main')

@section('container')
<article>
    <h2 class="mb-5">
        {{ $post->title}}
    </h2>

    <P>by <a href="/authors/{{ $post->author->username}}" class="text-decoration-none">{{ $post->author->name}}</a>
    <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{ $post->category->name}}</a></P>

    {!! $post->body!!}
</article>

<a href="/blog" class="d-block mt-3">Back</a>

@endsection
