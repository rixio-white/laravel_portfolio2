@extends('layouts.app')

@section('content')
        <h1>Blog Name未定</h1>
        <p class="create">[<a href='posts/create'>作品の投稿</a>]</p>
        <div class="posts">
            @foreach ($posts as $post)
                <div class="post1">
                    <a href='/posts/{{ $post->id }}'><h2 class="title">{{ $post->title }}</h2></a>
                    <p class=body>{{ $post -> body }}</p>
                </div>
            @endforeach
        </div>
@endsection