@extends('layouts.contacto.appcon')
@section('title', 'CONTACTO')

@section('content')
    <div class="container">
        <div class="logo">
            <div class="la">
                <img src="{{asset('Img/Assets/logo.svg')}}">
                <h1>SOLTIEND</h1>
            </div>
            <h4>Contamos Contigo</h4>
        </div>
        <div class="data">
            <div class="link1">
                <h3 style="text-transform: uppercase">Correo De Contacto</h3>
                <p><b>#########</b></p>
            </div>
            <div class="link2">
                <h3 style="text-transform: uppercase">Número De Contacto</h3>
                <p><b>#########</b></p>
            </div>
            <div class="link3">
                <h3 style="text-transform: uppercase">Dirección De Contacto</h3>
                <p><b>#########</b></p>
            </div>
        </div>
    </div>
@endsection