<?php

if (isset($_SESSION['username'])) {
    header('location: /pokedex');
}
use App\model\Login;

$isemptyUsername = empty($_POST['username']);
$isemptyPassword = empty($_POST['password']);
$issetVar = isset($_POST['username']) && isset($_POST['password']);
$issetVar = isset($_POST['username']) && isset($_POST['password']);
$filterUsername = isset($_POST['username']) ? filter_var($_POST['username'], FILTER_SANITIZE_STRING) : null;
$filterPassword = isset($_POST['password']) ? filter_var($_POST['password'], FILTER_SANITIZE_STRING) : null;


if ($issetVar && !$isemptyUsername && $filterPassword && $filterUsername) {

    $login = new Login($_POST['password'], $_POST['username']);
    if ($login->login()) {
        $_SESSION['idUser'] = $login->id();
        $_SESSION['username'] = $login->username($_SESSION['idUser']);
        $_SESSION['password'] = $login->password($_SESSION['idUser']);
        $_SESSION['email'] = $login->email($_SESSION['idUser']);
        $_SESSION['pokedex'] = $login->pokedexID($_SESSION['idUser']);
        header('location: /pokedex');
    }
}

if (!isset($_SESSION['idUser'])) {
    require __DIR__ . '/../view/login.php';
}

?>


