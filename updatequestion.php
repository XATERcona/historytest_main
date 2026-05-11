<?php 
require_once 'database/connection.php';

if (isset($_POST['question_order']) && is_array($_POST['question_order'])){
    foreach($_POST['question_order'] as $id => $question_order) {
    $id = (int)$id;
    $question_order = (int)$question_order;
    $update = $conn->prepare("UPDATE questions SET question_order = :question_order WHERE id = :id");
    $update->execute([':question_order' => $question_order, ':id' => $id]);
    } 
    header("Location: adminpanel.php?updated=1");
    exit(); 
} else {
    echo 'Ошибка';
}
?>