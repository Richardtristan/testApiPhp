<?php

use App\model\VerifUser;

$verif = new VerifUser($id);
$getVerif = $verif->getVerify();


if ($getVerif["confirm"] === "0") {
     $verif->setVerify();
     header('location: /login');
}
var_dump($getVerif["confirm"]);