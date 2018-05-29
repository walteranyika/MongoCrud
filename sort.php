<?php
require "vendor/autoload.php";

$client= new MongoDB\Client;

$companyDb= $client->companydb;

$empcollection= $companyDb->empcollection;

$documentList = $empcollection->find(
   [],
   ['limit'=>2]
);

foreach ($documentList as $doc){
    var_dump($doc);
}