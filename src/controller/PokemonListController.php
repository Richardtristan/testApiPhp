<?php
if (!isset($_SESSION['idUser'])) {
    header('location: /login');
}

use App\helper\Pokedex;
use App\model\PokeApi;
//$myPokemon = explode(',',$_SESSION['pokedex']);


$pokedex = new Pokedex($_SESSION['idUser']);

$decode = $pokedex->getPokemons();

$myPkm = explode(',',$decode[0]);
$myPokemons = array_unique($myPkm);
sort($myPokemons);

$api = new PokeApi;


require __DIR__ . '/../view/pokedex.php';