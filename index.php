<?php

require 'vendor/autoload.php';

use \Cartola\CartolaRequest;

$client = new CartolaRequest;

$a = $client->getAtletas();
