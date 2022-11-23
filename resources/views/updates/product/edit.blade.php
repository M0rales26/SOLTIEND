@extends('layouts.catalogo.appc')
@section('title', 'ACTUALIZAR')

@section('content')
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Actualizar Producto</span>
                <form action="{{url('catalogo/'.$catalogo->id_catalogo)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{method_field('PATCH')}}
                    <div class="input-field">
                        <input type="text" placeholder="Nombre Producto" name="nombrep" id="nombrep" value="{{$catalogo->nombrep}}">
                        <img src="{{asset('Img/Assets/cookie.svg')}}" class="icon">
                    </div>
                    <div class="input-field">
                        <input type="number" placeholder="Precio" name="precio" id="precio" value="{{$catalogo->precio}}">
                        <img src="{{asset('Img/Assets/price.svg')}}" class="icon">
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Contenido Neto" name="contenido_neto" id="contenido_neto" value="{{$catalogo->contenido_neto}}">
                        <img src="{{asset('Img/Assets/content.svg')}}" class="icon">
                    </div>
                    <div class="input-field">
                        <input type="file" name="foto" id="foto">
                        <img src="{{asset('Img/Assets/file.svg')}}" class="icon">
                    </div>
                    <div class="buttons">
                        <div class="input-field button">
                            <input type="submit" value="Actualizar">
                        </div>
                        <a href="{{route('catalogo.index')}}" class="input-field button-cancelar">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection