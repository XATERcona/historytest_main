<?php 
if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    http_response_code(405);
    exit();
}
session_start();

$inputs = [
    'login',
    'password',
    'email',
];

foreach($inputs as $input){
    if(!isset($_POST[$input]) || $_POST[$input] ==''){
        $_SESSION['message'] = "Заполните все поля!";
        header("Location: reg.php?stat=error");
        exit();
    }
};

$login = trim($_POST['login']);
$password = $_POST['password'];
$email = trim($_POST['email']);


if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $_SESSION['message'] = "Некоректный email!";
        exit();
}

require_once '../database/connection.php';

$check = $conn->prepare("
   select 
    exists (select 1 from users where login =:login) as login_err,
    exists (select 1 from users where email =:email) as email_err
");

$check -> execute([
    ':login' => $login,
    ':email' => $email
]);

$check = $check -> fetch(PDO::FETCH_ASSOC);
$errors = [];

if($check['login_err']){
    $errors[] = 'Логин занят';
};

if($check['email_err']){
    $errors[] = ' Email занят';
};

if(!empty($errors)){
     $_SESSION['message'] = implode('.', $errors). '!';
      header("Location: reg.php?stat=error");
      exit();
};

$newUser = $conn-> prepare(
    "insert into users(login, password, email) values(:login, :password, :email)"
);

$newUser -> execute([
    ':login' => $login,
    ':password' => password_hash($password, PASSWORD_DEFAULT),
    ':email' => $email
]);


header("Location: auth.php?stat=ok");
exit();