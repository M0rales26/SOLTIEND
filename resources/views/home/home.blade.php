@extends('layouts.apph')
@section('title','INICIO')

@section('content')
    @if (auth()->check())
        <h1>Welcome To Our App -> {{ auth()->user()->id }}</h1>
    @endif
@endsection