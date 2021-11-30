@extends('layouts.main')
@section('container')
    @foreach ( $posts as $post)
    <article class="mb-5 border-bottom pb-4">
        <h2>
            <a href="/posts/{{ $post->slug}}" class="text-decoration-none">{{ $post->title}}</a>
        </h2>
        <P>by <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name}}</a> <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{ $post->category->name}}</a></P>
        <p>{{ $post->excerpt}}</p>

        <a href="/posts/{{ $post->slug}}" class="text-decoration-none">Read more..</a>
    </article>
    @endforeach
@endsection
