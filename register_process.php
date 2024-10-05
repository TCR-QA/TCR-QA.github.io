<?php
require 'db_connect.php';

// Перевірка заповнення полів
if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])) {
    header("Location: register.php?error=Заповніть всі обов'язкові поля.");
    exit();
}

$username = trim($_POST['username']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$full_name = trim($_POST['full_name']);
$phone = trim($_POST['phone']);
$address = trim($_POST['address']);

// Перевірка наявності існуючого користувача
$sql = "SELECT * FROM users WHERE username = ? OR email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    header("Location: register.php?error=Користувач з таким ім'ям або електронною поштою вже існує.");
    exit();
}

// Хешування паролю та додавання користувача до бази даних
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO users (username, email, password, full_name, phone, address) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $username, $email, $hashed_password, $full_name, $phone, $address);

if ($stmt->execute()) {
    header("Location: login.php?success=Реєстрація успішна. Увійдіть.");
} else {
    header("Location: register.php?error=Помилка під час реєстрації. Спробуйте ще раз.");
}

$conn->close();
?>