<?php
include('database.php');

//fetch all students
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);
    $students = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $students[] = $row;
        }
    }

    echo json_encode($students);
}

//Add new student
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $date_of_birth = $_POST['date_of_birth'];
    $grade = $_POST['grade'];
    $address = $_POST['address'];

    $sql = "INSERT INTO students (first_name, last_name, date_of_birth, grade, address) VALUE ('$first_name', '$last_name', '$date_of_birth', '$grade', '$address')";

    if ($conn->query($sql)  === TRUE) {
        echo "New student created successfully";
    } else {
        echo "Error: ". "<br>" . $conn->error;
    }
}
?>