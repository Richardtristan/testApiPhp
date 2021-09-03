<?php
require '../vendor/autoload.php';
require_once("router.php");
use App\Model\Connect;
use App\Model\WelcomeList;

$connection = new Connect('127.0.0.1', 'cogip', 'root', '');
$db = $connection->getPdo();


// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index

get('/', "../src/view/login.php");



post('/delete_company/id/$id', "../src/Controller/DeleteCompanyController.php");















// ##################################################
// ##################################################
// ##################################################
// any can be used for GETs or POSTs

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404','../src/View/404.php');
