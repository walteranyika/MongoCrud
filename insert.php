<?php
require "vendor/autoload.php";


$client = new MongoDB\Client;

$companydb = $client->companydb;

$empcollection = $companydb->empcollection;

$manyResult = $empcollection->insertMany([
    ["names"=>"Steven Gerrad","age"=>27,"email"=>"gerrad@yahoo.com"],
    ["names"=>"Thomas Muller","age"=>41,"email"=>"thomas@yahoo.com"],
    ["names"=>"Edison Cavani","age"=>17,"email"=>"cavani@yahoo.com"],
    ["names"=>"Ronaldo Delima","age"=>26,"email"=>"delima@yahoo.com"]
]);

var_dump($manyResult);

/*$result = $empcollection->insertOne(["names"=>"Thomas Kiuna","age"=>17,"email"=>"thomas@yahoo.com"]);


printf("Inserted %d records", $result->getInsertedCount());
var_dump( $result->getInsertedId());*/

//var_dump($result);

