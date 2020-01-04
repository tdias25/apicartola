<?php

namespace Cartola;
use Cartola\Helpers\Request;

/**
 * 
 */
class CartolaRequest extends Request
{

	protected $endpoint;
	protected $method = 'GET';
	protected $base_url = 'https://api.cartolafc.globo.com';
	
	function __construct()
	{	
		$this->setUrl($this->base_url);
	}

	function getAtletas() {

		$this->setEndpoint('/atletas/mercado')
		->sendRequest();

		return $this->getResponse();
	}

	function getResponse() {
		return json_decode($this->response, true);
	}

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @param string $endpoint
     *
     * @return self
     */
    private function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
        $this->setUrl( $this->url . $endpoint );

        return $this;
    }

}