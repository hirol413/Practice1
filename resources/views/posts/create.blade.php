<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
        <h1> New blog</h1>
        <form action="/posts/" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{old('post.title')}}" /><!--name属性はサーバ側で扱うのでわかりやすくpost情報であることを明記-->
                <p class="title_error" style="color:red">{{ $errors->first('post.title')}}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <input type="text" name="post[body]" placeholder="本文を入力しましょう" value="{{old('post.body')}}" />
                <p class="body_error" style="color:red">{{ $errors->first('post.body')}}</p>
            </div>
            <input type="submit" value="保存" />
        </form>
        <div class='footer'>
            <a href="/">戻る</a>
        </div>
    </body>
</html>