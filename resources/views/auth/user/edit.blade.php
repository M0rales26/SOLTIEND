@extends('layouts.perfil.appu')
@section('title' , 'EDITAR PERFIL')

@section('content')
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Editar Datos</span>
                <form action="{{url('editar',$datosperfil->id_usuario)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="input-field">
                        <input type="text" name="name" id="name" value="{{$datosperfil->name}}">
                        <img src="{{asset('Img/Assets/user.svg')}}" class="icon">
                    </div>
                    <div class="input-field">
                        <input type="email" name="email" id="email" value="{{$datosperfil->email}}">
                        <img src="{{asset('Img/Assets/email.svg')}}" class="icon">
                    </div>
                    <div class="input-field">
                        <input type="file" name="foto" id="foto">
                        <img src="{{asset('Img/Assets/file.svg')}}" class="icon">
                    </div>
                    <div class="buttons">
                        <div class="input-field button">
                            <input type="submit" value="Actualizar">
                        </div>
                        <a href="{{route('home.index')}}" class="input-field button-cancelar">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- <form action="{{url('eliminar',$datosperfil->id_usuario)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form> --}}
@endsection