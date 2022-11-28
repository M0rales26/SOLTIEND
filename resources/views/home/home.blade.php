@extends('layouts.apph')
@section('title','INICIO')

@section('content')
    @if (auth()->check())
        @if (auth()->user()->rol_id == 1)
            <h1>Eres Cliente</h1>
        @else
            <h1>Eres Tendero</h1>
        @endif
    @endif
@endsection