<?php 
if(!isset($_SESSION['user'])){
    echo '<p>Требуется выполнить вход</p>';
    exit();
};

require_once '../database/connection.php';

$results = $conn->prepare("SELECT title, total_score, title_text , DATE_FORMAT(passed_at, '%d.%m.%Y %H:%i') AS date FROM results 
   INNER JOIN scenarios ON results.scenario_id = scenarios.id  
   INNER JOIN result_text ON results.result_id = result_text.id  WHERE user_id = :userId ORDER BY passed_at DESC LIMIT 6");
$results->execute([':userId' => $_SESSION['user']['userId']]);

$allResults = $results->fetchAll(PDO::FETCH_ASSOC);

?>