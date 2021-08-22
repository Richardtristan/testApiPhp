<?php
require "vendor/autoload.php";
$photo = array();
for ($number = 0; $number < 10; $number++) {
    $minmissions = file_get_contents("https://api.magicthegathering.io/v1/cards?page= $number");
    $responses = json_decode($minmissions, true);
    $key = $responses['cards'];
    foreach ($key as $value) {
        if (array_key_exists('imageUrl', $value)) {
            array_push($photo,"{$value['imageUrl']},{$value['multiverseid']}");
        }
    }
}

/*echo "<img alt='' src=" . $value['imageUrl'] . "><br>";*/



foreach ($photo as $value){
    echo $value . '<br>';
}








