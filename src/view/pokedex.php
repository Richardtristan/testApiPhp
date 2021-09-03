<?php
require 'header.php';
?>
<table>
<tr>
    <!--td qui seront foreach avec les data de lutilisateur-->
<td><img src="image1.jpg" alt="titre" /></td>

</tr>
</table>
<?php
require 'footer.php';

require '../vendor/autoload.php';
use App\model\PokeApi;

$api = new PokeApi();

$api->pokemon('151');
$pokemons = $api->callApi();


echo '<img src="'.$pokemons->sprites->back_default.'" width="200">';
echo '<img src="'.$pokemons->sprites->front_default.'" width="200">';

