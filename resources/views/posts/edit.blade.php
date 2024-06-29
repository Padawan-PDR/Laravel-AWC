<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body style="display: flex; justify-content: center; align-items: center;">
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method("PUT")
        Titulo: <input type="text" name="title" value="{{$post->title}}"><br>
        Conteudo: <input type="text" name="content" value="{{$post->content}}">
        <button type="submit">Enviar </button> 
    </form>
</body>
</html>