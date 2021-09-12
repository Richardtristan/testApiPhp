<?php

if (isset($_SESSION['idUser'])) {
    header('location: /pokedex');
}
use App\helper\User;

$isemptyUsername = empty($_POST['username']);
$isemptyEmail = empty($_POST['email']);
$isemptyPassword = empty($_POST['password']);
$isemptyCheckbox = empty($_POST['checkbox']);
$issetVar = isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['checkbox']);
$filterUsername = isset($_POST['username']) ? filter_var($_POST['username'], FILTER_SANITIZE_STRING) : null;
$filterEmail = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : null;
$filterPassword = isset($_POST['password']) ? filter_var($_POST['password'], FILTER_SANITIZE_STRING) : null;

if ($issetVar && !$isemptyUsername && $filterEmail && $filterPassword && $filterUsername) {
    $user = new User(trim($filterUsername), trim($filterEmail), password_hash(trim($filterPassword),PASSWORD_BCRYPT));
}else $user = null;
require __DIR__ . '/../view/register.php';
if ($issetVar) {
    if ($user != null && !$user->emailExist() && !$user->UsernameExist()) {
        $user->createUser();
    }
}
