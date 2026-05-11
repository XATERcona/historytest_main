<?php 
if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    http_response_code(405);
    exit();
}
session_start();


$inputs = [
    'login',
    'password'
];
foreach($inputs as $input){
    if(!isset($_POST[$input]) || $_POST[$input] ==''){
        $_SESSION['message'] ="Заполните все поля!";
        header("Location:../autoPage.php?stat=error");
        exit();
    }
}
$login = trim($_POST['login']);
$password = $_POST['password'];


require_once '../database/connection.php';

$checkUser = $conn-> prepare("
    select * from users where login = :login or email = :email
");

$checkUser -> execute([
    ':login' => $login,
    ':email' => $login,
]);

$checkUser = $checkUser -> fetch(PDO::FETCH_ASSOC);
if(!$checkUser || !password_verify($password, $checkUser['password'])){
    $_SESSION['message'] = "Неверное имя пользователя или пароль!";
        header("Location:../autoPage.php?stat=error");
        exit();
}
session_regenerate_id(true);
$_SESSION['user'] =[
    'userId' => $checkUser['id'],
    'userLogin' => $checkUser['login'],
    'userEmail' => $checkUser['email'],
    'userRole' => $checkUser['role']
];

header("Location: ../page/userPage.php");
exit();
?>