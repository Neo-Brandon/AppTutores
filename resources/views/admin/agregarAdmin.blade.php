@extends('layouts.app')

@section('title', 'Agregar Admin')

@section('content')


    <link rel="stylesheet" href="{{ asset('myResource/css/tecnicoIndex.css') }}" />
    <div class="container">
        <div class="menu">
            <h1>Agregar</h1>
            <div class="menu-items">
                <div class="menu-item" onclick="window.location.href='registarAlumnosAdmin.html'">
                    <i class="fa fa-user-graduate"></i>
                    <span>Alumnos</span>
                </div>
                <div class="menu-item" onclick="window.location.href='registarTutoressAdmin.html'">
                    <i class="fa fa-person-chalkboard"></i>
                    <span>Tutores</span>
                </div>
                <div class="menu-item" onclick="window.location.href='registarAdministradorAdmin.html'">
                    <i class="fa fa-atom"></i>
                    <span>Administrador</span>
                </div>
            </div>
        </div>
    </div>

@endsection