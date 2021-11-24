@extends('layouts.main')

@section('container')
<article>
    <h2 class="mb-5">
        {{ $post->title}}
    </h2>
    {!! $post->body!!}
</article>

<a href="/blog">Back</a>

@endsection
