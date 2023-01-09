@extends('layouts.tiendas.apptd')
@section('title' , 'TIENDAS')

@section('content')
    <article class="container">
        <ul class="items">
            @foreach ($tiendas as $shop)
                <a href="{{route('tienda.index',['id' => $shop->id_usuario])}}">
                    <li class="card">
                        <img src="perfil/{{$shop->fotop}}" width="180" height="160">
                        <p class="info_text">
                            {{$shop->name}}<br>
                            {{$shop->email}}
                        </p>
                    </li>
                </a>
            @endforeach
        </ul>
    </article>
@endsection