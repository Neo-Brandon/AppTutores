@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .head {
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
            margin-top: 120px; /* Ajuste para no solaparse con el encabezado fijo */
        }
        .filter-buttons {
            margin: 20px 0;
            text-align: center;
        }
        .message-list {
            margin-bottom: 80px; /* Espacio para el cuadro de entrada fijo */
        }
        .message-box {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 10px;
            width: 750px
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
    <div class="head">
        <h2>Mensajes Recibidos</h2>
        <p>Seleccione o filtre sus mensajes</p>
    </div>

    <div class="container content">
        <div class="filter-buttons">
            <button class="btn btn-outline-success">Todos</button>
            <button class="btn btn-outline-success">Leídos</button>
            <button class="btn btn-outline-success">No Leídos</button>
        </div>

        <div class="message-list">
            <div class="message-box">
                <h5>Jimena Vinoch Paz</h5>
                <p>Buen día maestra, cuando puedo ...</p>
                <span class="badge badge-danger">1</span>
            </div>
            <div class="message-box">
                <h5>David Alfonso Gutierrez</h5>
                <p>Hola maestra, respecto a lo que ...</p>
                <span class="badge badge-danger">1</span>
            </div>
            <div class="message-box">
                <h5>Angela Karime Cinefuegos</h5>
                <p>Ya comenté con mi profesor de ...</p>
                <span class="badge badge-danger">2</span>
            </div>
            <div class="message-box">
                <h5>Solomon Armstrong</h5>
                <p>He terminado las asesorías de ...</p>
                <span class="badge badge-danger">3</span>
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