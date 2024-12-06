@extends('layouts.app')

@section('title', 'Usuarios')

@section('content')

<style>
    .grid-item {
            background-color: #4da3b6;
            
        }
</style>

    <!--<link rel="stylesheet" href="{{ asset('myResources/css/menuAdmin.css') }}" />-->
    <div class="container">
        <div class="welcome">
            <h2><strong>Usuarios</strong></h2>
            <p>Visualice la lista de usuarios</p>
        </div>

        <div class="grid">
            <div class="grid-item">
                <a href="{{ url('/admin/registroAlumno') }}">
                    <img src="{{asset('icons/user.png')}}" alt="Agregar">
                    <p>Alumnos</p>
                </a>
            </div>
            <div class="grid-item">
                <a href="{{ url('/admin/usuariosAdmin') }}">
                    <img src="{{asset('icons/user.png')}}" alt="Usuarios">
                    <p>Tutores</p>
                </a>
            </div>
            <div class="grid-item">
                <a href="{{ url('/admin/registroAdmin') }}">
                <img src="{{asset('icons/group.png')}}" alt="Grupo Asignado">
                <p>Administrador</p>
                </a>
            </div>
        </div>
    </div>
@endsection