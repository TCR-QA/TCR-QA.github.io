<?php
require 'db_connect.php';

// Отримання даних з форми
$username = $_POST['username'];
$password = $_POST['password'];

// Перевірка користувача
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        header("Location: profile.php");
    } else {
        echo "Неправильний пароль";
    }
} else {
    echo "Користувача не знайдено";
}

$conn->close();
?>