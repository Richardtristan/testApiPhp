<?php

use App\model\VerifUser;

$verif = new VerifUser($id);
$getVerif = $verif->getVerify();


if ($getVerif["confirm"] === "0") {
     $verif->setVerify();
     $_SESSION['confirm'] = 'ok';
     header('location: /login');
}else{header('location: /404');}
