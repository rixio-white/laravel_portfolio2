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
        <form action="/posts" method="POST">
            {{ csrf_field() }}
            <div class="title">
                <input type="text" name="post[title]" placeholder="タイトル文" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <textarea name="post[body]" placeholder="ここに画像を添付したい"/>{{ old('post.body') }}</textarea> 
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="投稿"/>
        </form>
            <div class="back">[<a href='/'>戻る</a>]</div>
            </div>
        
    </body>
</html>
