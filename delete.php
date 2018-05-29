<?php

require "vendor/autoload.php";

$client= new MongoDB\Client;

$companyDb= $client->companydb;

$empcollection= $companyDb->empcollection;

$deletedRecord = $empcollection->deleteOne(
    ["email"=>"gerrad@yahoo.com"]
);

printf("Deleted %d", $deletedRecord->getDeletedCount());