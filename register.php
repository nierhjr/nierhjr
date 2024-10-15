<?php
include('database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $role = $_POST['email'];

    $sql = "INSERT INTO users (username, password, email) VALUE ('$username', '$password', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>