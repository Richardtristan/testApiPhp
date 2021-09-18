<?php
if (!isset($_SESSION['idUser'])) {
    header('location: /login');
}

use App\helper\Pokedex;
use App\model\PokeApi;


$issetVar = isset($_POST['pokemon_x']) && isset($_POST['pokemon_y']);

$pokedex = new Pokedex($_SESSION['idUser']);

$pokemons = $pokedex->getPokemons();
$date = new DateTime($pokedex->getDate()[0]);
$date->modify("+2 hour");
$hour = $date->format("Y-m-d H:i:s");
$dateNow = new DateTime();
$list = new PokeApi;
if ($issetVar && $date < $dateNow) {
    $randId = rand(1, 151);
    $pokedex->setPokemons($pokemons[0], ",$randId");
    $pokedex->setDate($dateNow->format("Y-m-d H:i:s"));
}

require __DIR__ . '/../view/lucky.php';


