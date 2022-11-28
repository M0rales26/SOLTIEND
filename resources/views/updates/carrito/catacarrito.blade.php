@extends('layouts.carrito.appcar')
@section('title' , 'PRODUCTOS')

@section('content')
    {{-- {{Cart::getContent()}} --}}
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
                        <form action="{{route('cart.store')}}" method="POST">
                            @csrf
                            <input type="hidden" name="products_id" id="products_id" value="{{$cat->id_catalogo}}">
                            <button class="add">Agregar al Carrito</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </article>
@endsection