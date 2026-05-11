<?php 
session_start();
require_once '../database/connection.php';


$scenario_id = 3;
$step = 1;

if(isset($_GET['scenario_id']) && isset($_GET['step'])){
    $scenario_id = intval($_GET['scenario_id']);
    $step = intval($_GET['step']);
}

$start = $step - 1;

$selectquestion = $conn->query("SELECT * FROM questions WHERE scenario_id = $scenario_id ORDER BY question_order ASC LIMIT $start, 2");
$question = $selectquestion->fetch(PDO::FETCH_ASSOC);

if(!$question) {
    header("Location: result3.php?stat=ok");
    exit(); 
}

$selectanswer = $conn->query("SELECT * FROM answers WHERE question_id = " . intval($question['id']));
$answers = $selectanswer->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/tests.css">
</head>
<body>
<div class="wrap">
    <header>
        <div class = "logo">
            <h1>26</h1>
            <p>двадцатьшестые</p>
        </div>
        <div class="nav">
            <a href="../page/userPage.php">Главная</a>
            <a href="../page/userPageResults.php">Личный кабинет</a>
        </div>
    </header>
<main>
    <div class="scen">
        <div class="question">
            <p>Вопрос <?= $step ?></p>
            <p class="question_text"><?= htmlspecialchars($question['question_text']); ?></p>
            <form action="saveanswer.php" method="POST">
                <input type="hidden" name="scenario_id" value="<?= $scenario_id ?>">
                <input type="hidden" name="question_id" value="<?= $question['id'] ?>">
                <input type="hidden" name="step" value="<?= $step ?>">
        </div>
        <div class="answer">
            <?php foreach($answers as $answer): ?>
                <button type="submit" name="answer_id" value="<?= $answer['id'] ?>">
                    <?= htmlspecialchars($answer['answer_text']); ?>
                </button>
                <br><br>
            <?php endforeach; ?>
            </form> 
        </div>
    </div>
</main>
</body>
</html>