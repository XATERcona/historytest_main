<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../js/scriptPassword.js" defer></script>
    <link rel="stylesheet" href="../css/reg.css">
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
          <div class="box">
    <form action="regScript.php" method="POST" class="form">
      <h1>РЕГИСТРАЦИЯ</h1>
        <label for="login">Логин</label>
        <input type="text"  required name="login" id="login" >

        <label for="password">Пароль</label>
        <input type="password" class="password" name="password" id="password" >

        <label for="email">Email</label>
        <input type="email"  required name="email" id="email" >

        <input type="submit" value="Зарегистрироваться" id="submit">
        <p>ЕСТЬ АККАУНТ? <a href="auth.php" class="href">ВОЙТИ</a></p>
</div>
</main>
</div>
</body>
</html>