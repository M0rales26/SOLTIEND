@extends('layouts.carrito.appcar')
@section('title' , 'CATALOGO')

@section('content')
    <article class="container">
        <ul class="items">
            @foreach ($catalogo as $cat)
                <li class="card">
                    <img src="foto/{{$cat->foto}}" width="180" height="160">
                    <p class="info_text">
                        {{$cat->nombrep}}<br>
                        {{$cat->precio}}<br>
                        {{$cat->contenido_neto}}
                    </p>
                    <div>
                        <button class="add">Agregar al Carrito</button>
                    </div>
                </li>
            @endforeach
        </ul>
    </article>
@endsection