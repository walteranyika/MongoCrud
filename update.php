<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "vendor/autoload.php";


$client= new MongoDB\Client;

$companyDb= $client->companydb;

$empcollection= $companyDb->empcollection;

$updateResult = $empcollection->updateMany(
    ['email'=>"gerrad@yahoo.com"],
    ['$set'=>['age'=>77]]
);

printf("Modified records %d", $updateResult->getModifiedCount());
echo "<br>";
printf("Matched records %d", $updateResult->getMatchedCount());