<?php

require 'vendor/autoload.php';

use \Cartola\CartolaRequest;

$client = new CartolaRequest;

var_dump($client->getAtletas());