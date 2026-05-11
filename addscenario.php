<?php
require_once 'database/connection.php';

//значения из формы
$title = trim($_POST['title']);
$description = trim($_POST['description']);
$category = trim($_POST['category']);

if(isset($_POST["title"]) && !empty($_POST["title"]) && 
isset($_POST["description"]) && !empty($_POST["description"]) && 
isset($_POST["category"]) && !empty($_POST["category"])
 ){ 
    //первые значения из базы данных, вторые из формы
    $addscenario = $conn -> prepare("INSERT INTO scenarios ( title, description, category) VALUES (:title, :description, :category)");
    $addscenario -> execute([ ':title' => $title, ':description' => $description, ':category' => $category]);
    header("Location: adminpanel.php?stat=ok");
    exit();
} else{
    echo "Ошибка";
}

?>