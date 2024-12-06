@extends('layouts.app')

@section('title', 'Inicio')

@section('content')


    <div class="container">
        <div class="welcome">
            <h2><strong>Bienvenido Tutor</strong></h2>
            <p>Toque cualquier recuadro para navegar</p>
        </div>

        <div class="grid">
            <div class="grid-item">
                <a href="{{ url('/tutor/mensajes') }}">
                    <img src="{{asset('icons/message.png')}}" alt="Mensajes">
                    <p>Mensajes</p>
                </a>
            </div>
            <div class="grid-item">
                <a href="{{ url('/tutor/incidencias') }}">
                    <img src="{{asset('icons/warnings.png')}}" alt="Incidecncias">
                    <p>Incidencias</p>
                </a>
            </div>
            <div class="grid-item">
                <a href="">
                <img src="{{asset('icons/group.png')}}" alt="Grupo Asignado">
                <p>Grupo Asignado</p>
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