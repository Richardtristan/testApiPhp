<?php


use App\helper\Ladder;


$pokedex = new Ladder();
$ladderPkm = $pokedex->ladderPokedex();

foreach ($ladderPkm as $data) {
    $numPokemons = explode(",", $data[1]);


}


//   $ladderPkmNum = $ladderPkm[0];
//    var_dump($ladderPkmNum);
//    $explodeLadder = explode(",", $ladderPkmNum);
//    unset($explodeLadder[0]);
//    $numberPokemonsInPokedex = count($explodeLadder);


    require __DIR__ . '/../view/ladder.php';
