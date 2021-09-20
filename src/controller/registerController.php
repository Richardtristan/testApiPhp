<?php

if (isset($_SESSION['idUser'])) {
    header('Location: /pokedex');
}

use PHPMailer\PHPMailer\PHPMailer;
use App\helper\User;
$cle = rand(1000000,9000000);
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
    $user = new User(trim($filterUsername), trim($filterEmail), password_hash(trim($filterPassword),PASSWORD_BCRYPT));
}else $user = null;
require __DIR__ . '/../view/register.php';
if ($issetVar) {
    if ($user != null && !$user->emailExist() && !$user->UsernameExist()) {
        $user->createUser($cle);

        function smtpmailer($to, $from, $from_name, $subject, $body)
        {
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPAuth = true;

            $mail->SMTPSecure = 'ssl';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 465;
        $mail->Username = 'richard.tristan.93@gmail.com';
        $mail->Password = '??';

   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);

        $mail->IsHTML(true);
        $mail->From="richard.tristan.93@gmail.com";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $error ="Please try Later, Error Occured while Processing...";
            return $error;
        }
        else
        {
            $error = "Thanks You !! Your email is sent.";
            return $error;
        }
    }

        $to   = $filterEmail;
        $from = "richard.tristan.93@gmail.com";
        $name = 'PhpApi';
        $subj = "http://http://185.142.53.158/confirm/cle/$cle/id/45";
        $msg = 'This is mail about testing mailing using PHP.';

        $error=smtpmailer($to,$from, $name ,$subj, $msg);
    }
}
