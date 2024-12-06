@extends('layouts.app')

@section('title', 'Menu')

@section('content')

<style>
    .grid-item {
            background-color: #4da3b6;
            
        }
</style>

    <div class="container">
        <div class="welcome">
            <h2><strong>Bienvenido Administrador</strong></h2>
            <p>Toque cualquier recuadro para navegar</p>
        </div>

        <div class="grid">
            <div class="grid-item">
                <a href="{{ url('/tutor/mensajes') }}">
                    <img src="{{asset('icons/plus.png')}}" alt="Agregar">
                    <p>Agregar</p>
                </a>
            </div>
            <div class="grid-item">
                <a href="{{ url('/admin/usuariosAdmin') }}">
                    <img src="{{asset('icons/user.png')}}" alt="Usuarios">
                    <p>Usuarios</p>
                </a>
            </div>
            <div class="grid-item">
                <a href="">
                <img src="{{asset('icons/group.png')}}" alt="Grupo Asignado">
                <p>Grupos y asignacion</p>
                </a>
            </div>

            <div class="grid-item">
                <a href="{{ url('/admin/añadir') }}">
                <img src="{{asset('icons/profile.png')}}" alt="Mi perfil">
                <p>Mi perfil</p>
                </a>
            </div>
        </div>
    </div>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
@endsection