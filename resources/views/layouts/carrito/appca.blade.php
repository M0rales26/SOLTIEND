<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/InicioC.css')}}">
    <link rel="stylesheet" href="{{asset('css/AgregarCarrito.css')}}">
    <title>@yield('title') - SOLTIEND</title>
</head>
<body id="body">
    <header>
        <div class="search_bar">
            <div class="bar_s">
                <img src="{{asset('Img/Assets/search.svg')}}">
                <input type="text" placeholder="¿Qué deseas buscar?">
            </div>
        </div>
        <div class="car_nav">
            <div class="button_car">
                <p><b>{{Cart::getTotalQuantity()}}</b></p>
                <p>Elementos</p>
                <img src="{{asset('Img/Assets/cart.svg')}}" class="list_img">
            </div>
        </div>
        <div class="nav_nav">
            <div class="button_edit">
                <a href="{{url('editar', auth()->user()->id_usuario)}}" class="edit_link" title="Actualizar Perfil">Editar Datos</a>
                <img src="{{asset('Img/Assets/edit.svg')}}" class="list_img">
            </div>
        </div>
        <div class="up_nav">
            <div class="button_logout">
                <a href="{{route('login.destroy')}}" class="logout_link" title="Cerrar Sesion">Cerrar Sesion</a>
                <img src="{{asset('Img/Assets/logout.svg')}}" class="list_img">
            </div>
        </div>
    </header>
    <nav class="nav">
        <div class="name_page">
            <img src="{{asset('Img/Assets/shop.svg')}}">
            <h4>SOLTIEND</h4>
        </div>
        <div class="circle">
            @if (auth()->check())
                <img src="/perfil/{{auth()->user()->fotop}}">
            @endif
        </div>
        <div class="name">
            @if (auth()->check())
                <p><b>{{ auth()->user()->name}}</b></p>
            @endif
        </div>
        <ul class="list">
            <li class="list_item">
                <div class="list_button">
                    <img src="{{asset('Img/Assets/dashboard.svg')}}" class="list_img">
                    <a href="{{route('home.index')}}" class="nav_link" title="Inicio">Inicio</a>
                </div>
            </li>
            <li class="list_item">
                <div class="list_button list_button--click">
                    <img src="{{asset('Img/Assets/coffeebean.svg')}}" class="list_img">
                    <a href="{{route('shop')}}" class="nav_link" title="Productos">Productos</a>
                </div>
            </li>
            <li class="list_item list_item--click">
                <div class="list_button list_button--click">
                    <img src="{{asset('Img/Assets/shop.svg')}}" class="list_img">
                    <a href="{{route('tiendas.index')}}" class="nav_link" title="Tiendas">Tiendas</a>
                    {{-- <img src="Img/Assets/arrow.svg" class="list_arrow"> --}}
                </div>
                {{-- <ul class="list_show">
                    <li class="list_inside">
                        <a href="#" class="nav_link nav_link--inside">Cancelados</a>
                        <a href="#" class="nav_link nav_link--inside">Pendientes</a>
                        <a href="#" class="nav_link nav_link--inside">Completados</a>
                    </li>
                </ul> --}}
            </li>
            <li class="list_item">
                <div class="list_button list_button--click">
                    <img src="{{asset('Img/Assets/archive.svg')}}" class="list_img">
                    <a href="#" class="nav_link" title="Historial De Compras">Historial</a>
                </div>
            </li>
            <li class="list_item">
                <div class="list_button list_button--click">
                    <img src="{{asset('Img/Assets/contact.svg')}}" class="list_img">
                    <a href="{{route('contacto.index')}}" class="nav_link" title="Contacto">Contacto</a>
                </div>
            </li>
        </ul>
    </nav>
    <main>
        @yield('content')
    </main>
    <script src="{{asset('js/Code.js')}}"></script>
</body>
</html>