<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

function checkRole($role) {
    if ($_SESSION['role's] !== $role) {
        header("Location: unauthorised.html");
        exit();
    }
}
?>