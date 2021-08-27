<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>未定</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        <h1>Blog Name未定</h1>
            <div class="post1">
                <h2 class="title">{{ $post->title }}</h2>
                <p class=body>{{ $post -> body }}</p>
                <p class=updated_at>{{ $post -> updated_at }}</p>
            </div>
            <div class="back">[<a href='/'>back</a>]</div>
            </div>
        
    </body>
</html>
