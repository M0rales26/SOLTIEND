@extends('layouts.carrito.appcar')
@section('title' , 'CARRITO')

@section('content')
    @if (count(Cart::getContent()))
        <article class="container">
            <ul class="items">
                @foreach ($cartCollection as $cat)
                    <li class="cardc">
                        <img src="foto/{{$cat->attributes->imagen}}" width="180" height="160">
                        <p class="info_text">
                            {{$cat->name}}<br>
                            {{$cat->price}}<br>
                            {{$cat->attributes->descripcion}}<br>
                            Cantidad {{$cat->quantity}}
                        </p>
                        <div class="b">
                            <form action="{{route('cart.update')}}" method="POST">
                                @csrf
                                <div class="input_ed">
                                    <input type="hidden" name="id" id="id" value="{{$cat->id}}">
                                    <input type="number" name="quantity" id="quantity" min="1" value="{{$cat->quantity}}" class="quan">
                                </div>
                                <div class="button_ed">
                                    <button class="ed">Editar</button>
                                </div>
                            </form>
                        </div>
                        <div class="a">
                            <form action="{{route('cart.remove')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" id="id" value="{{$cat->id}}">
                                <button class="re">Remover</button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        </article>
        <div class="bot">
            <div class="info">
                {{-- <h4>Subtotal: </h4><p>{{Cart::get($cat->id)->getPriceSum()}}</p><br> --}}
                <h2>Total: <b>{{Cart::getTotal()}}</b></h2>
            </div>
            <form action="{{route('cart.clear')}}" method="POST">
                @csrf
                <input type="hidden" name="products_id" id="products_id" value="{{$cat->id_catalogo}}">
                <button class="clear"><b>Limpiar Carrito</b></button>
            </form>
        </div>
    @else
        <h1 class="empty">¡Carrito Vacio!</h1>
    @endif
@endsection