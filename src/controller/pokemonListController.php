<?php
if (!isset($_SESSION['idUser'])) {
    header('location: /login');
}

use App\helper\Pokedex;
use App\model\PokeApi;
//$myPokemon = explode(',',$_SESSION['pokedex']);


$pokedex = new Pokedex($_SESSION['idUser']);

$decode = $pokedex->getPokemons();

if ($decode != "" ){

    $myPkm = explode(',',$decode[0]);
    $myPokemons = array_unique($myPkm);
    sort($myPokemons);
    unset($myPokemons[0]);
    $list = new PokeApi;
    $story = new PokeApi;
}


function colortype($colorType)
{

        switch ($colorType) {

            case "poison" :
                echo 'background-color: purple; border-radius :5px; color: black !important;';
                break;
            case "normal" :
                echo 'background-color: #CEB4C3; border-radius :5px; color: black !important;';
                break;
            case "fighting" :
                echo 'background-color: #D67200; border-radius :5px; color: black !important;';
                break;
            case "flying" :
                echo 'background-color: #77BBC0; border-radius :5px; color: black !important;';
                break;
            case "ground" :
                echo 'background-color: #AB6B2A; border-radius :5px; color: black !important;';
                break;
            case "rock" :
                echo 'background-color: grey; border-radius :5px; color: black !important;';
                break;
            case "bug" :
                echo 'background-color: #005615; border-radius :5px; color: black !important;';
                break;
            case "ghost" :
                echo 'background-color: #372D7E; border-radius :5px; color: black !important;';
                break;
            case "steel" :
                echo 'background-color: #3FA3AD; border-radius :5px; color: black !important;';
                break;
            case "fire" :
                echo 'background-color: FireBrick; border-radius :5px; color: black !important;';
                break;
            case "water" :
                echo 'background-color: RoyalBlue; border-radius :5px; color: black !important;';
                break;
            case "grass" :
                echo 'background-color: green; border-radius :5px; color: black !important;';
                break;
            case "electric" :
                echo 'background-color: yellow; border-radius :5px; color: black !important;';
                break;
            case "psychic" :
                echo 'background-color: HotPink; border-radius :5px; color: black !important;';
                break;
            case "ice" :
                echo 'background-color: #4AEBFB; border-radius :5px; color: black !important;';
                break;
            case "dragon" :
                echo 'background-color: #56A9B1; border-radius :5px; color: black !important;';
                break;
            case "dark" :
                echo 'background-color: black; border-radius :5px; color: black !important;';
                break;
            case "fairy" :
                echo 'background-color: #EAA2E5; border-radius :5px; color: black !important;';
                break;
            case "unknown" :
                echo 'background-color: #53956A; border-radius :5px; color: black !important;';
                break;
            case "shadow" :
                echo 'background-color: #460057; border-radius :5px; color: black !important;';
                break;
            case "default" :
                echo 'background-color: white; border-radius :5px; color: black !important;';
                break;
        }

}

require __DIR__ . '/../view/pokedex.php';


