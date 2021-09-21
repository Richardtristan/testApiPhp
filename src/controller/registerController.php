<?php

if (isset($_SESSION['idUser'])) {
    header('Location: /pokedex');
}

use App\model\User;
use PHPMailer\PHPMailer\PHPMailer;

$configs = include(__DIR__ . '/../../public/config.php');
$cle = rand(1000000, 9000000);
$isemptyUsername = empty($_POST['username']);
$isemptyEmail = empty($_POST['email']);
$isemptyPassword = empty($_POST['password']);
$isemptyCheckbox = empty($_POST['checkbox']);
$issetEmail = isset($_POST['email']);
$issetVar = isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['checkbox']);
$filterUsername = isset($_POST['username']) ? filter_var($_POST['username'], FILTER_SANITIZE_STRING) : null;
$filterEmail = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : null;
$filterPassword = isset($_POST['password']) ? filter_var($_POST['password'], FILTER_SANITIZE_STRING) : null;

if ($issetVar && !$isemptyUsername && $filterEmail && $filterPassword && $filterUsername) {
    $user = new User(trim($filterUsername), trim($filterEmail), password_hash($filterPassword, PASSWORD_BCRYPT));
} else $user = null;
require __DIR__ . '/../view/register.php';
if ($issetVar) {
    if ($user != null && !$user->emailExist() && !$user->UsernameExist()) {
        $user->createUser($cle);
        $mail = new PHPMailer();
            $_SESSION['mailer'] = $mail;


            $body = "<a href='http://185.142.53.158/confirm/cle/$cle/id/{$_SESSION['id']}'>Click to confirm</a>";

            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Host = 'smtp.mail.yahoo.com';
            $mail->Port = 587;
            $mail->Username = $configs->mailUser;
            $mail->Password = $configs->mailPass;

            $mail->setFrom($configs->mailUser, 'PhpApi');

            $mail->AddReplyTo($configs->mailUser, "PhpApi");

            $mail->Subject = "confirm your Account PhpApi";

            $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

            $mail->MsgHTML($body);

            $address = $filterEmail;
            $mail->AddAddress($address);

            if (!$mail->Send()) {
                echo "Mailer Error: " . $mail->ErrorInfo;
            }
        }
}