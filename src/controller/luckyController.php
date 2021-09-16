<?php
if (!isset($_SESSION['idUser'])) {
    header('location: /login');
}
use App\helper\Pokedex;


$issetVar = isset($_POST['pokemon_x']) && isset($_POST['pokemon_y']);

$pokedex = new Pokedex($_SESSION['idUser']);

$pokemons = $pokedex->getPokemons();
$date = new DateTime($pokedex->getDate()[0]);
$date->modify("+2 hour");
$dateNow = new DateTime();

if ($issetVar && $date < $dateNow){
  $randId =  rand(1, 151);
$pokedex->setPokemons($pokemons[0],",$randId");
$pokedex->setDate($dateNow->format("Y-m-d H:i:s"));
echo '<h1>Bravo</h1>';
}
else echo '<h1>revient plus tard</h1>';


require __DIR__ . '/../view/lucky.php';


