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

    /**
    * @return array
    */
	function getAtletas() {

		$this->setEndpoint('/atletas/mercado')
		->sendRequest();

		return $this->getResponse();
	}

    /**
    * @return array
    */
    function getMercadoStatus() {

        $this->setEndpoint('/mercado/status')
        ->sendRequest();

        return $this->getResponse();
    }

    /**
    * @return array
    */
    function getPatrocinadores() {

        $this->setEndpoint('/patrocinadores')
        ->sendRequest();

        return $this->getResponse();
    }

    /**
    * @return array
    */
    function getRodadas() {

        $this->setEndpoint('/rodadas')
        ->sendRequest();

        return $this->getResponse();
    }

    /**
    * @return array
    */
    function getPartidas() {

        $this->setEndpoint('/partidas')
        ->sendRequest();

        return $this->getResponse();
    }

    /**
    * @return array
    */
    function getPartidasPorRodada($rodada) {

        $this->setEndpoint("/partidas/{$rodada}")
        ->sendRequest();

        return $this->getResponse();
    }

    /**
    * @return array
    */
    function getClubes() {

        $this->setEndpoint('/clubes')
        ->sendRequest();

        return $this->getResponse();
    }

    /**
    * @return array
    */
    function getAtletasPontuados() {

        $this->setEndpoint('/atletas/pontuados')
        ->sendRequest();

        return $this->getResponse();
    }

    /**
    * @return array
    */
    function getPontuacaoTimeRodadaAnterior() {

        $this->setEndpoint('/pos-rodada/destaques')
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