<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "user_database";

// Створення підключення
$conn = new mysqli($servername, $username, $password, $database);

// Перевірка підключення
if ($conn->connect_error) {
    die("Помилка підключення: " . $conn->connect_error);
}
?>