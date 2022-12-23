<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('editar',$datosperfil->id_usuario)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" value="{{$datosperfil->name}}" name="name">
        <input type="email" value="{{$datosperfil->email}}">
        <input type="file">
        <input type="submit" value="Editar"></input>
    </form>
    {{-- <form action="{{url('eliminar',$datosperfil->id_usuario)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form> --}}
</body>
</html>