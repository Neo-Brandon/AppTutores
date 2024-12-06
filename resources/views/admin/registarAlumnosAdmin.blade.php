@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<div class="container">
  <div class="col-12 col-md-8 col-lg-6">
    <div class="welcome text-center">
      <h2><strong>Registrar Alumno</strong></h2>
      <p>Registre manualmente a un alumno</p>
    </div>
        <form>
          <div class="form-group">
            <label for="name" class="label-form">Nombre:</label>
            <input type="text" class="form-control" id="name" placeholder="Ingrese el nombre">
          </div>
          <div class="form-group">
            <label for="paterno">Apellido Paterno:</label>
            <input type="text" class="form-control" id="paterno" placeholder="Ingrese el apellido paterno">
          </div>
          <div class="form-group">
            <label for="materno">Apellido Materno:</label>
            <input type="text" class="form-control" id="materno" placeholder="Ingrese el apellido materno">
          </div>
          <div class="form-group">
            <label for="semester">Semestre que cursa:</label>
            <select class="form-control" id="semester">
              <option>Seleccione un semestre</option>
             <!-- Aqui agregar mas opciones -->
            </select>
          </div>
          &nbsp;
          <button type="submit" class="btn btn-primary w-100">Registrar Alumno</button>
        </form>
      </div>
    </div>
@endsection