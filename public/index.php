<?php

require_once('../vendor/autoload.php');
require_once("router.php");
session_start();

use App\model\Connect;


$connection = new Connect('localhost', 'pkm', 'root', '');
$db = $connection->getPdo();


// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index

get('/', "/../src/controller/loginController.php");
get('/login', "/../src/controller/loginController.php");
post('/login', "/../src/controller/loginController.php");
get('/register', "/../src/controller/registerController.php");
post('/register', "/../src/controller/registerController.php");
get('/lucky', "/../src/view/lucky.php");
get('/pokedex', "/../src/controller/PokemonListController.php");
get('/logout', "/../src/controller/logoutController.php");



post('/delete_company/id/$id', "../src/Controller/DeleteCompanyController.php");















// ##################################################
// ##################################################
// ##################################################
// any can be used for GETs or POSTs

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST any('/404','../src/View/404.php');
