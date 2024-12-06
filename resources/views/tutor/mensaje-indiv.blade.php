
@extends('layouts.app')

@section('title', 'Mensajes')

@section('content')
    
    <style>
        .student-list {
            max-width: 600px;
            margin: auto;
        }
        .student-item {
            display: flex;
            align-items: center;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .student-item img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }
        .search-bar {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .search-bar input {
            flex: 1;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .search-bar button {
            margin-left: 10px;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #28a745;
            color: white;
            border: none;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="welcome">
            <h2><strong>Mensaje individual</strong></h2>
            <p>Seleccione a un alumno o haga una búsqueda</p>
        </div>
            <div class="search-bar">
                <input type="text" placeholder="Buscar alumno...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="student-item">
                <img src="https://via.placeholder.com/40" alt="Profile">
                <span>Sergio Daniel Martinez</span>
            </div>
            <div class="student-item">
                <img src="https://via.placeholder.com/40" alt="Profile">
                <span>Martha Fernan Lopez</span>
            </div>
            <div class="student-item">
                <img src="https://via.placeholder.com/40" alt="Profile">
                <span>Gerado Jimenez Sanchez</span>
            </div>
            <div class="student-item">
                <img src="https://via.placeholder.com/40" alt="Profile">
                <span>Jimena Vinoche Paz</span>
            </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @endsection