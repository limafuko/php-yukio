<?php

require_once 'C:/wamp64/www/vendor/autoload.php';

use Chadicus\Marvel\Api\Client;

$publicApiKey = '4c59225f8466b4661d2e7d973f7afa67';
$privateApiKey = '37e3f00f2d06a95a512ba33aa59c0b12aa34aa2b';

$client = new Client($privateApiKey, $publicApiKey);

$dataWrapper = $client->get('characters', 1009351);

$attributionText = $dataWrapper->getAttributionText();

$character = $dataWrapper->getData()->getResults()[0];

echo "{$character->getName()}\n";
echo "{$character->getDescription()}\n";

foreach ($character->getEvents()->getItems() as $event) {
    echo "\t{$event->getName()}\n";
}