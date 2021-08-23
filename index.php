<?php
require "vendor/autoload.php";
$photo = array();
for ($number = 0; $number < 9; $number++) {
    $minmissions = file_get_contents("https://api.magicthegathering.io/v1/cards?language=french&page= $number; rel='next'");
    $responses = json_decode($minmissions, true);
    $key = $responses['cards'];
    foreach ($key as $value) {
        if (array_key_exists('imageUrl', $value)) {
            array_push($photo,array('url'=>$value['imageUrl'],'id'=>$value['multiverseid']));
        }
    }
}

/*echo "<img alt='' src=" . $value['imageUrl'] . "><br>";*/
asort($photo);
foreach ($photo as $value){
    echo "<img alt='' src='  {$value['url'] } ' >";
    echo $value['id'];
}







