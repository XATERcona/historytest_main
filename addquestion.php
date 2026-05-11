<?php
require_once 'database/connection.php';
$scenario = trim($_POST['scenario']);
$question_text = trim($_POST['question_text']);
$question_order = trim($_POST['question_order']);


if(isset($_POST["scenario"]) && !empty($_POST["scenario"]) && isset($_POST["question_text"]) && !empty($_POST["question_text"]) && 
isset($_POST["question_order"]) && !empty($_POST["question_order"])

 ){ 
    //первые значения из базы данных, вторые из формы
    $addquestion = $conn -> prepare("INSERT INTO  questions(scenario_id, question_text, question_order) VALUES (:scenario, :question_text, :question_order)");
    $addquestion -> execute([':scenario' => $scenario, ':question_text' => $question_text, ':question_order' => $question_order]);
     header("Location: adminpanel.php?stat=ok");
    exit();
} else{
    echo "Ошибка";
}
?>
