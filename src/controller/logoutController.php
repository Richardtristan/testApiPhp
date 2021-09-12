<?php


use App\helper\Logout;

$logout =new Logout();
$logout->logout();

header("location: /login");

