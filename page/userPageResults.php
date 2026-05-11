<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/userPageResults.css">
</head>
<body>
<div class="wrap">
    <header>
        <div class = "logo">
            <h1>26</h1>
            <p>двадцатьшестые</p>
        </div>
       <div class="nav">
                <a href="../catalog.html">Каталог</a>
                <a href="userPage.php">Главная</a>
                <a href="../php/logOut.php"> Выйти</a>
            </div>
    </header>
    <main>
        <h1>Личный кабинет</h1>
        <div class="history">
            <div class="sessio">
        <?php if (isset($_SESSION['user']['userLogin'])){
        echo '<p style="font-size: 22px; ">' . $_SESSION['user']['userLogin'] . '</p>';
        }?>
        <?php 
            if(isset($_SESSION['user']['userRole']) && $_SESSION['user']['userRole'] == 'admin'){
               echo '<a href="../admin/adminpanel.php" style="text-decoration: none;
    color: #262626da; font-size: 20px;"; >Административная панель</a>';
            } 
        ?>

        </div>
<?php include '../php/getResult.php'; ?>
    <?php foreach($allResults as $row): ?>
        <div class="result">
            <div class="round"><?= $row['title']?></div>
            <div class="score">
                <div >Баллы: <?= $row['total_score']?></div>
                <div >Дата: <?= $row['date']?></div>
            </div>
            <div class="label"> <?= $row['title_text']?></div>
        </div>
   <?php endforeach; ?>
</div>
</main>
</div>
</body>
</html>