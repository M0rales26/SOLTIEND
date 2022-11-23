@extends('layouts.loginregister.b1')

@section('title','INICIO DE SESIÓN')

@section('content')
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Iniciar Sesión</span>
                <form action="" method="post">
                    @csrf
                    <div class="input-field">
                        <input type="email" placeholder="Email" id="email" name="email">
                        <img src="Img/Assets/user.svg" class="icon">
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Contraseña" id="password" name="password">
                        <img src="Img/Assets/lock.svg" class="icon">
                        <!-- <i class="fa-regular fa-eye-slash showHidePw"></i> -->
                    </div>
                    @error('message')
                        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{$message}}</p>
                    @enderror
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                        </div>
                        <a href="#" class="text">¿Olvidaste tu contraseña?</a>
                    </div>
                    <div class="input-field button">
                        <input type="submit" value="Iniciar Sesión">
                    </div>
                </form>
                <div class="login-signup">
                    <span class="text">¿No tienes una cuenta?
                        <a href="{{route('register.index')}}">Crear Cuenta</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
@endsection