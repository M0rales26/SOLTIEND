@extends('layouts.catalogo.appc')
@section('title', 'CREAR')

@section('content')
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Crear Producto</span>
                <form action="{{route('catalogo.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-field">
                        <input type="text" placeholder="Nombre Producto" name="nombrep" id="nombrep">
                        <input type="hidden" name="usuario_id" value="{{auth()->user()->id_usuario}}">
                        <img src="{{asset('Img/Assets/cookie.svg')}}" class="icon">
                    </div>
                    <div class="input-field">
                        <input type="number" placeholder="Precio" name="precio" id="precio">
                        <img src="{{asset('Img/Assets/price.svg')}}" class="icon">
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Contenido Neto" name="contenido_neto" id="contenido_neto">
                        <img src="{{asset('Img/Assets/content.svg')}}" class="icon">
                    </div>
                    <div class="input-field">
                        <input type="file" name="foto" id="foto">
                        <img src="{{asset('Img/Assets/file.svg')}}" class="icon" accept=".jpg,.png">
                    </div>
                    <div class="buttons">
                        <div class="input-field button">
                            <input type="submit" value="Crear">
                        </div>
                        <a href="{{route('catalogo.index')}}" class="input-field button-cancelar">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection