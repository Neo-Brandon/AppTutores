@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .header {
            background-color: #28a745; /* Color verde */
            color: white;
            padding: 20px;
            text-align: center;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        .content {
            margin-top: 100px; /* Ajuste para no solaparse con el encabezado fijo */
        }
        .message-box {
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 20px 0;
            padding: 10px;
        }
        .input-group {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #28a745; /* Color verde */
            padding: 10px;
        }
        .input-group input {
            width: calc(100% - 100px); /* Ajusta el tamaño del campo de entrada */
        }
    </style>
</head>
<body>
    <div class="">
        <h2>Mensaje Grupal</h2>
        <p>Todos podrán leer su anuncio.</p>
    </div>

    <div class="container content">
        <div class="message-box">
            <div class="message">
                <div class="message-content bg-success text-white p-3 rounded">
                    <p>Muchachos buenos días quiero comentarles que mañana nos reuniremos en el aula adjunta para ...</p>
                </div>
            </div>
        </div>
    </div>

    <div class="input-group">
        <input type="text" class="form-control" placeholder="Mensaje">
        <div class="input-group-append">
            <button class="btn btn-light" type="button"><i class="fas fa-arrow-right"></i></button>
        </div>
        <div class="input-group-append">
            <button class="btn btn-light" type="button"><i class="fas fa-plus"></i></button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

@endsection