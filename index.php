<?php

require 'vendor/autoload.php';

use \Cartola\CartolaRequest;

$client = new CartolaRequest;

$a = $client->getPontuacaoTimeRodadaAnterior();

echo '<pre>';
print_r($a);
// var_dump($client->getHttpCode());
