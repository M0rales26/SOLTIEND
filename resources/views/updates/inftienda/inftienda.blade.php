@extends('layouts.carrito.appcar')
@section('title' , 'PRODUCTOS')

@section('content')
    <div>
        @foreach ($tendero as $pers)
            <img src="/perfil/{{$pers->fotop}}" width="180" height="160">
            <p class="info_text">
                {{$pers->name}}<br>
                {{$pers->email}}
            </p>
        @endforeach
    </div>
    <article class="container">
        <ul class="items">
            @foreach ($producto as $item)
                <li class="card">
                    <img src="/foto/{{$item->foto}}" width="180" height="160">
                    <p class="info_text">
                        {{$item->nombrep}}<br>
                        {{$item->precio}}<br>
                        {{$item->contenido_neto}}
                    </p>
                    <div>
                        <form action="{{route('cart.store')}}" method="POST">
                            @csrf
                            <input type="hidden" name="products_id" id="products_id" value="{{$item->id_catalogo}}">
                            <button class="add">Agregar al Carrito</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </article>
@endsection