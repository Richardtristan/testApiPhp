<?php

use App\model\PokeApi\PokeApi;
$api = new PokeApi;
$pokemon = $api->pokemon('mew');
echo $pokemon['name'];