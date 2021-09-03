<?php
/*$pokemon = 'bulbasaur';

$api = file_get_contents("https://pokeapi.co/api/v2/pokemon/$pokemon/");
$json = json_decode($api);


echo '<h2>Talent</h2>';
foreach($json->abilities as $k => $v) {
    echo $v->ability->name.'<br>';
}

echo '<h2>Type</h2>';
echo $json->types[0]->type->name;

echo '<h2>IMG</h2>';
echo '<img src="'.$json->sprites->back_default.'" width="200">';
echo '<img src="'.$json->sprites->front_default.'" width="200">';*/

require '../vendor/autoload.php';
use App\model\PokeApi;

$api = new PokeApi();

$api->pokemon('151');
$pokemons = $api->callApi();


    echo '<img src="'.$pokemons->sprites->back_default.'" width="200">';
    echo '<img src="'.$pokemons->sprites->front_default.'" width="200">';





