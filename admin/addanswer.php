<?php
require_once '../database/connection.php';
$question = trim($_POST['question']);
$answer_text = trim($_POST['answer_text']);
$score = trim($_POST['score']);


if(isset($_POST["question"]) && !empty($_POST["question"]) && isset($_POST["answer_text"]) && !empty($_POST["answer_text"]) && 
isset($_POST["score"])

 ){ 
    //первые значения из базы данных, вторые из формы
    $addanswer = $conn -> prepare("INSERT INTO  answers(question_id, answer_text, score) VALUES (:question, :answer_text, :score)");
    $addanswer -> execute([':question' => $question, ':answer_text' => $answer_text, ':score' => $score]);
     header("Location: adminpanel.php?stat=ok");
    exit();
} else{
    echo "Ошибка";
}
?>