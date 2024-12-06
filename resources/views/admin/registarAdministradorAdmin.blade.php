@extends('layouts.app')

@section('title', 'Inicio')

@section('content')



    <div class="container">
        <div class="col-12 col-md-8 col-lg-6">
          <div class="welcome text-center">
            <h2><strong>Registrar Administrador</strong></h2>
            <p>Registre nuevos administradores</p>
          </div>
            <form>
              <div class="form-group">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" placeholder="Ingrese el nombre">
              </div>
              <div class="form-group">
                <label for="paterno">Apellido Paterno</label>
                <input type="text" class="form-control" id="paterno" placeholder="Ingrese el apellido paterno">
              </div>
              <div class="form-group">
                <label for="materno">Apellido Materno</label>
                <input type="text" class="form-control" id="materno" placeholder="Ingrese el apellido materno">
              </div>
              &nbsp;
              &nbsp;
              <div class="mb-3">
                <button type="submit" style="margin-top: 15px" class="btn btn-primary w-100">Registrar Administrador</button>
              </div>
            </form>
          </div>
      </div>
@endsection