@extends('layouts.app')

@section('title', 'Mensajes')

@section('content')


    <div class="container">
        <div class="welcome">
            <h2><strong>Mensajes</strong></h2>
            <p>Toque cualquier recuadro para navegar</p>
        </div>

        <div class="grid">
            <div class="grid-item">
                <a href="">
                    <img src="{{asset('icons/msg_received.png')}}" alt="Mensajes Recibidos">
                    <p>Mensajes Recibidos</p>
                </a>
            </div>
            <div class="grid-item">
                <a href="{{ url('/tutor/msg-group') }}">
                    <img src="{{asset('icons/group_message.png')}}" alt="Mensaje Grupal">
                    <p>Mensaje Grupal</p>
                </a>
            </div>
            <div class="grid-item">
                <a href="{{ url('/tutor/mensaje-indiv') }}">
                <img src="{{asset('icons/message.png')}}" alt="Mensaje Individual">
                <p>Mensaje Individual</p>
                </a>
            </div>

        </div>
    </div>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
@endsection