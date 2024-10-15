document.addEventListener("DOMContentLoaded", function() {
const studentForm = document.getElementById('studentForm');
const studentList = document.getElementById('studentList');

//Fetch and display students
function fetchStudents() {
    fetch('backend/student.php')
    .then(response=> response.json())
    .then(data => {
        studentList.innerHTML= '';
        data.forEach(student => {
            const li = document.createElement('li');
            li.textContent = '${student.first_name} ${student.last_name} - Grade: ${student.grade}';
            studentList.appendChild(li);
        });
    });
}

studentForm.addEventListener('submit', function(e){
    e.preventDefault();

    const formData = new FormData();
    formData.append('first_name', document.getElementById('first_name').value);
    formData.append('last_name', document.getElementById('last_name').value);
    formData.append('date_of_birth', document.getElementById('date_of_birth').value);
    formData.append('grade', document.getElementById('grade').value);
    formData.append('address', document.getElementById('address').value);

    fetch('backend/students.php',{
        method: 'POST',
        body: formData
    }).then(response => response.text())
    .then(data => {
        alert(data);
        fetchStudents();
    });
});

fetchStudents();
});