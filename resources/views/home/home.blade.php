@extends('layouts.apph')
@section('title','INICIO')

@section('content')
    @if (auth()->check())
        @if (auth()->user()->rol_id == 1)
            <h1>Bienvenido a Nuestro Sitio Web</h1>
        @else
            <h1>Bienvenido {{auth()->user()->name}}</h1>
        @endif
    @endif
@endsection