<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/auth.css">
</head>
<body>

<div class="wrap">
    <header>
        <div class = "logo">
            <h1>26</h1>
            <p>двадцатьшестые</p>
        </div>
        <div class="nav">
                <a href="catalog.html">Каталог</a>
            </div>
    </header>
    <main>
        
    <?php if (isset($_SESSION['message'])): ?>
        <p><?= $_SESSION['message'] ?></p>
        <?php unset($_SESSION['message']);
        endif; ?>
<div class="box" >
    <form action="authScript.php" method="POST">
        <h1>ВХОД</h1>
        <label for="login">Логин или Email:</label>
        <input type="text" name="login" id="login" class="login" required >

        <label for="password">Пароль:</label>
        <input type="password" class="password" name="password" id="password" >
        <div class="submit"><input type="submit" id="submit" value="Войти"></div>
       <p>НЕТ АККАУНТА?<a href="reg.php"> ЗАРЕГИСТРИРОВАТЬСЯ</a> </p>
    </form>
</div>
    </main>
</div>
</body>
</html>