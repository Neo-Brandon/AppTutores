const searchInput = document.getElementById('searchInput');
const studentList = document.getElementById('studentList');
const studentItems = studentList.getElementsByClassName('student-item');
const deleteButtons = studentList.getElementsByClassName('delete-btn');
const editButtons = studentList.getElementsByClassName('edit-btn');

// Search 
searchInput.addEventListener('input', () => {
  const searchTerm = searchInput.value.toLowerCase();

  for (let i = 0; i < studentItems.length; i++) {
    const studentName = studentItems[i].querySelector('.student-name').textContent.toLowerCase();
    if (studentName.includes(searchTerm)) {
      studentItems[i].style.display = 'flex';
    } else {
      studentItems[i].style.display = 'none';
    }
  }
});

// Delete 
for (let i = 0; i < deleteButtons.length; i++) { 
  deleteButtons[i].addEventListener('click', () => {
    const studentItem = deleteButtons[i].closest('.student-item');
    const studentId = studentItem.dataset.studentId;

    // Confirmacion
    if (confirm("¿Estás seguro de eliminar este Alumno?")) {
      console.log(`Deleting student with ID: ${studentId}`);
      studentItem.remove();
    }
  });
}

// Edit 
for (let i = 0; i < editButtons.length; i++) {
  editButtons[i].addEventListener('click', () => {
    const studentItem = editButtons[i].closest('.student-item');
    const studentId = studentItem.dataset.studentId;
    const studentName = studentItem.querySelector('.student-name').textContent;
    const studentAvatar = studentItem.querySelector('.student-avatar').style.backgroundImage.slice(5, -2);

    //Abrimos html y pasamos info
    window.location.href = 'editarAlumnoAdmin.html';
    document.getElementById('name').value = studentName;
    document.getElementById('avatar').value = studentAvatar;
    document.getElementById('editForm').dataset.studentId = studentId;
  });
}