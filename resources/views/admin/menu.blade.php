@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <!-- Contenido principal -->
    <div class="completo container mt-5 pt-5 text-center">
        <div class="texto mx-auto mb-4">
            <h1>Menú</h1>
            <h3>Bienvenido</h3>
            <h3>Elige una opción para comenzar</h3>
        </div>
    
        <div class="botones">
            <div class="row justify-content-center gy-3">
                <div class="col-auto">
                    <button class="custom-button d-flex flex-column align-items-center justify-content-center">
                        <span class="icon">📩</span>
                        <p>Mensajes</p>
                    </button>
                </div>
                <div class="col-auto">
                    <button class="custom-button d-flex flex-column align-items-center justify-content-center">
                        <span class="icon">👤</span>
                        <p>Perfil</p>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection