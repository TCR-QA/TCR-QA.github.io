<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Головна сторінка</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Блог</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Реєстрація</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Вхід</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Профіль</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="text-center">
            <h1>Ласкаво просимо до нашого блогу!</h1>
            <p class="lead">Це простий блог, де ви можете знайти цікаві статті та новини. Виберіть "Вхід" або "Реєстрація", щоб приєднатися до нашої спільноти.</p>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="blog-post">
                    <h2>Перша стаття</h2>
                    <p>Ласкаво просимо до нашої платформи! Ми прагнемо зробити вашу взаємодію з нашим сайтом приємною та корисною.</p>
                </div>
                <div class="blog-post">
                    <h2>Друга стаття</h2>
                    <p>Реєструйтеся, щоб отримати доступ до ексклюзивного контенту та можливості коментувати статті.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>