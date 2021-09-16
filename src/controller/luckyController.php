<?php
if (!isset($_SESSION['idUser'])) {
    header('location: /login');
}
use App\helper\Pokedex;

$isemptyCheckbox = empty($_POST['checkbox']);
$issetVar = isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['checkbox']);

$pokedex = new Pokedex($_SESSION['idUser']);

$pokemons = $pokedex->getPokemons();

var_dump($_POST);

if ($_SESSION){

}


require __DIR__ . '/../view/lucky.php';


