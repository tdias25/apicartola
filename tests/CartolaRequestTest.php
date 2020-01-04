<?php

use PHPUnit\Framework\TestCase;

use \Cartola\CartolaRequest;

class CartolaRequestTest extends TestCase
{
	
	function testGetAtletasResponse() {

		$client = new CartolaRequest;

		$getAtletas = $client->getAtletas();

		$this->assertEquals(200, $client->getHttpCode());

		$getStatusMercado = $client->getMercadoStatus();

		$this->assertEquals(200, $client->getHttpCode());
	}
}