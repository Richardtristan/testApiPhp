<?php

use App\helper\Pokedex;
use App\model\PokeApi;
$myPokemon = explode(',',$_SESSION['pokedex']);

$api = new PokeApi;
$pokedex = new Pokedex($_SESSION['idUser']);

$decode = $pokedex->getPokemons();

$myPokemons = explode(',',$decode[0]);
var_dump($decode);


require __DIR__ . '/../view/pokedex.php';