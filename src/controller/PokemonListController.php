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


//$api->type();
//$types = $api->callApi();
//echo '<pre>';
//var_dump($types->results);
//echo '</pre>';

function colortype($api)
{
    $api->type();
    $types = $api->callApi();
    foreach ($types->results as $type) {
        switch ($type->name) {

            case "poison" :
                echo 'bg-danger';
                break;
                case 'default':
                    echo 'bg-white';
                    break;
        }


    }
}

require __DIR__ . '/../view/pokedex.php';


