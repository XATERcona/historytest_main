<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/result.css">
</head>
<body>
<div class="wrap">
    <header>
        <div class = "logo">
            <h1>26</h1>
            <p>двадцатьшестые</p>
        </div>
        <div class="nav">
                <a href="../index.html">Главная</a>
                <a href="../page/userPageResults.php">Личный кабинет</a>
            </div>
    </header>
    <?php 
    require_once '../database/connection.php';
    $score = 0;
    if(isset($_SESSION['score'])){
       $score = $_SESSION['score'];
    }
    $scenario_id = 1;
    if(isset($_SESSION['scenario_id'])){
        $scenario_id = $_SESSION['scenario_id'];
    }
  
    $result = $conn->query("SELECT * FROM result_text WHERE scenario_id = $scenario_id AND $score >= min_score AND $score <= max_score");
    $result_text = $result->fetch(PDO::FETCH_ASSOC);
  
    if(isset($_SESSION['user'])){
        $user_id = $_SESSION['user']['userId'];
        $conn->query("INSERT INTO results(user_id, scenario_id, total_score, result_id) VALUES ($user_id, $scenario_id, $score, " . $result_text['id'] . ")");
    }
    ?>
    <div class="box">
    <div class="top">
    <h1>Результат</h1>
    <p><?= $score ?> правильных ответов из 10</p></div>
    <h3><?= $result_text['title_text']; ?></h3>
    <p><?= $result_text['description']; ?></p>
    <div class="bot">
    <a href="test1.php" class="btn">Пройти заново</a>
    <a href="test2.php" class="btn">Следующий уровень</a></div>
    </div>
</div>
</body>
</html>
<?php
unset($_SESSION['score']);
unset($_SESSION['answers']);
unset($_SESSION['scenario_id']);
 ?>