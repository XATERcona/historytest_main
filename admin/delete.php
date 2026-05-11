<?php
require_once '../database/connection.php';
if (isset($_POST['id']) && !empty($_POST['id'])){
    $id = (int)$_POST['id'];
    $deleteScenario = $conn->prepare("DELETE FROM scenarios WHERE id = :id");
    $deleteScenario->execute([':id' => $id]);
    header("Location: adminpanel.php?deleted=1");
    exit();
} else {
    echo "Ошибка";
}
?>