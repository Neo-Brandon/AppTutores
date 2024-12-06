@extends('layouts.app')

@section('title', 'Mensajes')

@section('content')

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/incidencias.css">
  <style>
    .incident-card {
      display: flex;
      align-items: center;
      background-color: #e2e6ea;
      padding: 0.75rem 1.25rem;
      border-radius: 1.25rem;
      margin-bottom: 1rem;
    }
    .incident-card .student-name {
      font-weight: bold;
      margin-right: 1rem;
      color: #464a4c;
    }
    .incident-card .incident-details {
      flex-grow: 1;
      color: #464a4c;
    }
    .incident-card .actions {
      display: flex;
      gap: 0.5rem;
    }
    .incident-form {
      background-color: #e2e6ea;
      padding: 1.25rem;
      border-radius: 1.25rem;
    }
    .incident-form .form-control {
      border: none;
      background-color: #f8f9fa;
    }
  </style>
</head>
<body class="d-flex flex-column vh-100">
  <!-- Header -->
  <header class="d-flex justify-content-between align-items-center px-3 py-2 bg-success text-white">
    <div>
      <h6 class="mb-0">Registro de Incidencias</h6>
    </div>
    <div class="menu-icon">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </header>

  <!-- Incident List -->
  <main class="flex-grow-1 overflow-auto p-3 bg-light">
    <div id="incident-list"></div>
  </main>

  <!-- Incident Form -->
  <div class="incident-form-container d-none">
    <form class="incident-form">
      <div class="form-group">
        <label for="studentName" class="form-label">Nombre del Estudiante</label>
        <input type="text" class="form-control" id="studentName" placeholder="Ingresa el nombre del estudiante">
      </div>
      <div class="form-group">
        <label for="incidentDescription" class="form-label">Descripción de la Incidencia</label>
        <textarea class="form-control" id="incidentDescription" rows="3" placeholder="Ingresa la descripción de la incidencia"></textarea>
      </div>
      <div class="d-flex justify-content-end gap-2">
        <button type="button" class="btn btn-secondary" id="cancelIncident">Cancelar</button>
        <button type="button" class="btn btn-primary" id="saveIncident">Guardar</button>
      </div>
    </form>
  </div>

  <!-- Input Section -->
  <footer class="bg-white py-3 px-3">
    <div class="input-wrapper d-flex align-items-center rounded-pill bg-success p-2">
      <input type="text" class="form-control border-0 bg-success text-white me-2 rounded-pill" placeholder="Registrar incidencia..." />
      <button class="btn btn-light rounded-circle" id="newIncident">
        <i class="bi bi-plus"></i>
      </button>
    </div>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const incidentList = document.getElementById('incident-list');
      const incidentFormContainer = document.querySelector('.incident-form-container');
      const incidentForm = document.querySelector('.incident-form');
      const newIncidentBtn = document.getElementById('newIncident');
      const cancelIncidentBtn = document.getElementById('cancelIncident');
      const saveIncidentBtn = document.getElementById('saveIncident');

      // Sample incident data
      let incidents = [
        {
          id: 1,
          studentName: 'Sergio Daniel Martínez',
          description: 'Llegó tarde a clase'
        },
        {
          id: 2,
          studentName: 'Martha Fernan lópez',
          description: 'Incumplimiento de tareas'
        },
        {
          id: 3,
          studentName: 'Gerado Jimenez Sanchez',
          description: 'Falta de participación'
        },
        {
          id: 4,
          studentName: 'Jimena Vinoche Paz',
          description: 'Comportamiento disruptivo'
        }
      ];

      function renderIncidents() {
        incidentList.innerHTML = '';
        incidents.forEach(incident => {
          const incidentCard = document.createElement('div');
          incidentCard.classList.add('incident-card');
          incidentCard.innerHTML = `
            <div class="student-name">${incident.studentName}</div>
            <div class="incident-details">${incident.description}</div>
            <div class="actions">
              <button class="btn btn-primary btn-sm" data-id="${incident.id}">Editar</button>
              <button class="btn btn-danger btn-sm" data-id="${incident.id}">Eliminar</button>
            </div>
          `;
          incidentList.appendChild(incidentCard);
        });
      }

      function showIncidentForm(incident = null) {
        const studentNameInput = document.getElementById('studentName');
        const incidentDescriptionInput = document.getElementById('incidentDescription');

        if (incident) {
          studentNameInput.value = incident.studentName;
          incidentDescriptionInput.value = incident.description;
        } else {
          studentNameInput.value = '';
          incidentDescriptionInput.value = '';
        }

        incidentFormContainer.classList.remove('d-none');
      }

      function hideIncidentForm() {
        incidentFormContainer.classList.add('d-none');
      }

      function saveIncident() {
        const studentName = document.getElementById('studentName').value.trim();
        const description = document.getElementById('incidentDescription').value.trim();

        if (studentName && description) {
          const newIncident = {
            id: incidents.length + 1,
            studentName,
            description
          };
          incidents.unshift(newIncident);
          renderIncidents();
          hideIncidentForm();
        } else {
          alert('Por favor, completa todos los campos.');
        }
      }

      function editIncident(id) {
        const incident = incidents.find(i => i.id === id);
        showIncidentForm(incident);
      }

      function deleteIncident(id) {
        const confirmDelete = confirm('¿Estás seguro de que quieres eliminar esta incidencia?');
        if (confirmDelete) {
          incidents = incidents.filter(i => i.id !== id);
          renderIncidents();
        }
      }

      newIncidentBtn.addEventListener('click', showIncidentForm);
      cancelIncidentBtn.addEventListener('click', hideIncidentForm);
      saveIncidentBtn.addEventListener('click', saveIncident);

      incidentList.addEventListener('click', (event) => {
        if (event.target.classList.contains('btn-primary')) {
          editIncident(parseInt(event.target.dataset.id));
        } else if (event.target.classList.contains('btn-danger')) {
          deleteIncident(parseInt(event.target.dataset.id));
        }
      });

      renderIncidents();
    });
  </script>
@endsection