<?php
require_once('../vendor/autoload.php');
require_once("router.php");
session_start();
require __DIR__. '/../src/view/header.php';


use App\model\Connect;
$configs = include('config.php');
$connection = new Connect($configs->host, $configs->database, $configs->username, $configs->pass);
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
get('/lucky', "/../src/controller/luckyController.php");
post('/lucky', "/../src/controller/luckyController.php");
get('/pokedex', "/../src/controller/pokemonListController.php");
get('/logout', "/../src/controller/logoutController.php");
get('/ladder', "/../src/controller/ladderController.php");
get('/confirm/cle/$cle/id/$id', "/../src/controller/confirmController.php");

















// ##################################################
// ##################################################
// ##################################################
// any can be used for GETs or POSTs

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST any('/404','../../src/View/404.php');
any('404', "/../src/view/404.php");