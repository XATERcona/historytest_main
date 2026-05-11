<?php 
session_start();
require_once 'database/connection.php';
$scenario_id = $_POST['scenario_id'];
$question_id = $_POST['question_id'];
$answer_id = $_POST['answer_id'];
$step = $_POST['step'];
if(!isset($_SESSION['answers'])){
       $_SESSION['answers'] = [];
    }
if(!isset($_SESSION['score'])){
       $_SESSION['score'] = 0;
    }
$_SESSION['answers'][] = [
    ':question_id' => $question_id, 
    ':answer_id' => $answer_id
];
    $result = $conn->query("SELECT score FROM answers WHERE id = $answer_id");
    $answer = $result->fetch(PDO::FETCH_ASSOC);
      $_SESSION['score'] += $answer['score'];
$next_step = $step + 1;
if($scenario_id == 1){
   header("Location: test.php?scenario_id=$scenario_id&step=$next_step");
    exit(); 
}
if($scenario_id == 2){
   header("Location: test2.php?scenario_id=$scenario_id&step=$next_step");
    exit(); 
}
if($scenario_id == 3){
   header("Location: test3.php?scenario_id=$scenario_id&step=$next_step");
    exit(); 
}

?>