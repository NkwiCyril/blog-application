<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Blog</title>
</head>
<body>
    <div class="full-blog">
        <h1>{{ $post->title }}</h1>
        <p>Posted {{$post->date->diffForHumans()}} by {{ $post->author}} </p>
        <p>{{ $post->content }}</p>
    </div>

</body>
</html>