<?php
require "vendor/autoload.php";

$client= new MongoDB\Client;

$companyDb= $client->companydb;

$empcollection= $companyDb->empcollection;

$documentList = $empcollection->find(["email"=>"gerrad@yahoo.com"], ["projection"=>["_id"=>0,"names"=>1]]);

foreach ($documentList as $doc){
    var_dump($doc);
}