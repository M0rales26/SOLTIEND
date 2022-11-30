@extends('layouts.loginregister.b2')

@section('title','REGISTRO')

@section('content')
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Registro</span>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-field">
                        <input type="text" placeholder="Nombre" name="name" id="name">
                        <img src="Img/Assets/user.svg" class="icon">
                    </div>
                    @error('name')
                        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>
                    @enderror
                    <div class="input-field">
                        <input type="email" placeholder="Correo Electronico" name="email" id="email">
                        <img src="Img/Assets/email.svg" class="icon">
                    </div>
                    @error('email')
                        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>
                    @enderror
                    <div class="input-field">
                        <select name="rol_id">
                            <option value="">Elegir Rol</option>
                            @foreach ($rol as $item)
                                <option value="{{$item['id_rol']}}">{{$item['rol']}}</option>
                            @endforeach
                        </select>
                        <img src="Img/Assets/user.svg" class="icon">
                    </div>
                    @error('rol')
                        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>
                    @enderror
                    <div class="input-field">
                        <input type="password" placeholder="Contraseña" name="password" id="password">
                        <img src="Img/Assets/lock.svg" class="icon">
                    </div>
                    @error('password')
                        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>
                    @enderror
                    <div class="input-field">
                        <input type="password" placeholder="Confirmar Contraseña" name="password_confirmation" id="password_confirmation">
                        <img src="Img/Assets/lock.svg" class="icon">
                    </div>
                    <div class="input-field">
                        <input type="file" name="fotop" id="fotop" accept=".jpg,.png">
                        <img src="Img/Assets/upload.svg" class="icon">
                    </div>
                    @error('fotop')
                        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>
                    @enderror
                    <div class="input-field button">
                        <input type="submit" value="Registrarme">
                    </div>
                </form>
                <div class="login-signup">
                    <span class="text">¿Ya tienes una cuenta?
                        <a href="{{route('login.index')}}">Iniciar Sesión</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
@endsection