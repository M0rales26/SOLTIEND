@extends('layouts.catalogo.appin')
@section('title' , 'CATALOGO')

@section('content')
    <a href="{{route('catalogo.create')}}" class="create">Crear Producto</a>
    <article class="container">
        <ul class="items">
            @foreach ($catalogo as $cat)
                <li class="card">
                    <img src="foto/{{$cat->foto}}" width="180" height="160">
                    <p class="info_text">
                        {{$cat->nombrep}}<br>
                        {{$cat->precio}}<br>
                        {{$cat->contenido_neto}}
                    </p>
                    <div class="options" id="control">
                        <form action="{{url('/catalogo/'.$cat->id_catalogo.'/edit/')}}">
                            <button type="submit" class="button1">Actualizar</button>
                        </form>
                        <form action="{{url('/catalogo/'.$cat->id_catalogo)}}" method="POST" class="form_delete">
                            @csrf
                            {{method_field('DELETE')}}
                            <button type="submit" class="button2 btn-eliminar">Eliminar</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </article>
@endsection
@section('js')
    <script src="{{asset('assets/js/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <link href="{{asset('assets/css/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">
    @if(session('Eliminado') == 'ok')
        <script>
            Swal.fire(
                'Eliminado!',
                'El producto se eliminó con exito!',
                'success'
            )
        </script>
    @endif
    <script>
        $('.form_delete').submit(function(e){
            e.preventDefault();
                Swal.fire({
                    title: '¿Estás Seguro?',
                    text: "Se eliminará definitivamente el producto",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Aceptar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed){
                        this.submit();
                    }
                })
            })
    </script>
@endsection