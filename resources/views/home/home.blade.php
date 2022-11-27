@extends('layouts.apph')
@section('title','INICIO')

@section('content')
    @if (auth()->check())
        <h1>Welcome To Our App</h1>
        @if (auth()->user()->rol_id == 1)
            <h2>Eres Cliente</h2>
        @else
            <h2>Eres Tendero</h2>
        @endif
    @endif
@endsection