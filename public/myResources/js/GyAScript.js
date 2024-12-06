document.addEventListener("DOMContentLoaded", () => {
    const createGroupButton = document.querySelector(".crt-btn");
    const groupList = document.getElementById("GroupList");
  
    // Event listener for 'Crear Grupo' button
    createGroupButton.addEventListener("click", () => {
      // Prompts for creating a group
      const groupName = prompt("Ingrese el nombre del grupo:");
      const generation = prompt("Ingrese la generacion (e.g., 2022):");
      const period = prompt("Ingrese el periodo de registro (e.g., Ene/Jun):");
      const tutor = prompt("Ingrese el nombre del tutor:");
  
      // Check if all inputs are filled
      if (groupName && generation && period && tutor) {
        // Create a new group element
        const newGroup = document.createElement("div");
        newGroup.classList.add("group-item");
        const groupId = Date.now(); // Using a timestamp as a unique ID for the group
        newGroup.setAttribute("data-group-id", groupId); // Set the group ID
  
        newGroup.innerHTML = `
          <div class="group-info">
            <div class="group-avatar" style="background-image: url('https://dummyimage.com/40x40/0e755b/fff&text=Grupo')"></div>
            <div>
              <div class="group-name">${groupName}</div>
              <div class="group-details">
                <p>Generacion: ${generation}</p>
                <p>Periodo de Registro: ${period}</p>
                <p>Tutor: ${tutor}</p>
              </div>
            </div>
          </div>
          <div class="group-actions">
            <button class="action-btn edit-btn"><i class="fas fa-edit"></i> Editar</button>
            <button class="action-btn delete-btn"><i class="fas fa-trash"></i> Eliminar</button>
          </div>
        `;
  
        // Add the new group to the list
        groupList.appendChild(newGroup);
      } else {
        alert("No llenaste toda la informacion");
      }
    });
  
    // Event delegation for delete and edit buttons
    groupList.addEventListener("click", (event) => {
      // Check if the clicked button is a delete button
      if (event.target.closest(".delete-btn")) {
        const groupElement = event.target.closest(".group-item");
        if (confirm("Estas seguro de eliminar este grupo?")) {
          groupElement.remove();
        }
      }
  
      // Check if the clicked button is an edit button
      if (event.target.closest(".edit-btn")) {
        const groupItem = event.target.closest(".group-item");
        const groupId = groupItem.dataset.groupId; // Extract group ID
        const groupName = groupItem.querySelector(".group-name").textContent; // Extract group name
        const groupAvatar = groupItem.querySelector(".group-avatar").style.backgroundImage.slice(5, -2); // Extract avatar URL
        const groupDetails = groupItem.querySelector(".group-details");
        const generation = groupDetails.querySelector("p:nth-child(1)").textContent.split(": ")[1];
        const period = groupDetails.querySelector("p:nth-child(2)").textContent.split(": ")[1];
        const tutor = groupDetails.querySelector("p:nth-child(3)").textContent.split(": ")[1];
  
        // Redirect to the edit page and pass information
        window.location.href = "editarGyAGrupo.html";
  
        // Pre-fill form fields after navigation
        window.onload = () => {
          document.getElementById("group-name").value = groupName;
          document.getElementById("group-avatar").value = groupAvatar;
          document.getElementById("group-generation").value = generation;
          document.getElementById("group-period").value = period;
          document.getElementById("group-tutor").value = tutor;
          document.getElementById("editForm").dataset.groupId = groupId;
        };
      }
    });
  });