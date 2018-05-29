<?php
//echo 1234;
//http://php.net/manual/en/mongodb.installation.pecl.php
//phpinfo();
//die();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//
require "vendor/autoload.php";
$client = new MongoDB\Client;

//list databases
/*foreach ($client->listDatabases() as $db){
    var_dump($db);
}*/

$companydb = $client->companydb;//Create the database

////Creating a collection
/*$result1= $companydb->createCollection("mycollcetion");*/
////
//var_dump($result1);
//Listing collections
foreach ($companydb->listCollections() as $collection){
    var_dump($collection);
}

//Deleting a collection
/*$result2 = $companydb->dropCollection('mycollcetion');

var_dump($result2);*/

