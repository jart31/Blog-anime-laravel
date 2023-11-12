<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>{{ $post->title }}</title>
    <!-- Estilos para tu PDF aquí -->
</head>
<body>
    <img
    style="width: 300px" style="height: 300px"
    src="{{asset('storage/images/' . $post->image_path) }}" alt="">
    <h1>{{ $post->title }}</h1>
    <!-- Contenido del post aquí -->
    <div>{!! $post->body !!}</div>
</body>
</html>
