<?php
require "vendor/autoload.php";

$client= new MongoDB\Client;

$companyDb= $client->companydb;

$empcollection= $companyDb->empcollection;

$documentList = $empcollection->find(["email"=>"gerrad@yahoo.com"]);

foreach ($documentList as $doc){
    var_dump($doc);
}

//var_dump($documentList);