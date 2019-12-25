<?php

namespace Cartola;
use Cartola\Helpers\CartolaRequest;

/**
 * 
 */
class Cartola
{	

	public function __construct() {
		$this->request = new CartolaRequest;
	}

	private $base_url = 'https://api.cartolafc.globo.com/';

	function getAtletas() {
		// return $this->request->
	}
	
}