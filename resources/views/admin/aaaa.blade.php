@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

    <div class="inicio container text-center mt-5">
        <div class="texto mx-auto mb-4">
            <h1>Tec Laguna Tutorías</h1>
            <h3>Inicia sesión para continuar</h3>
        </div>
        
        <img src="{{asset('icons/asesoramiento-online.png')}}" 
        alt="Asesoramiento online" 
        class="img-fluid mb-4"
        style="max-width: 200px;">
        
        <div class="mx-auto" style="max-width: 400px;">
            <input type="text" class="form-control mb-3" placeholder="Identificador">
            <input type="password" class="form-control mb-3" placeholder="Contraseña">
            <button class="btn btn-success w-100">Iniciar sesión</button>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection