<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Вхід</title>
</head>
<body>
    <div class="navbar">
        <a href="index.php">На головну</a>
        <a href="register.php">Реєстрація</a>
    </div>
    
    <div class="form-container">
        <h1>Форма входу</h1>
        <form action="login_process.php" method="POST">
            <label for="username">Ім'я користувача:</label>
            <input type="text" id="username" name="username" required><br><br>
            
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required><br><br>
            
            <input type="submit" value="Увійти">
        </form>
    </div>
</body>
</html>