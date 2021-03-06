<?php

namespace Cartola\Helpers;

Class Request
{

	protected $url;
	protected $response;
	protected $http_code;
	protected $method;
	protected $cUrl;
    protected $debugInfo;

	public function sendRequest() {	

		$this->cUrl = curl_init();

		curl_setopt($this->cUrl, CURLOPT_CUSTOMREQUEST, $this->method);
		curl_setopt($this->cUrl, CURLOPT_URL, $this->url);
		curl_setopt($this->cUrl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->cUrl, CURLOPT_HTTPHEADER, array(
            'User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20041001 Firefox/0.10.1',
            'Content-Type: application/json'
        ));

        $this->debugInfo = curl_getinfo($this->cUrl);

        $this->response = curl_exec($this->cUrl);
        $this->http_code = curl_getinfo($this->cUrl, CURLINFO_HTTP_CODE);

        curl_close($this->cUrl);
    }

    /**
     * @return array
     */
    public function getDebugInfo()
    {
        return $this->debugInfo;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
    	return $this->url;
    }

    /**
     * @param mixed $url
     *
     * @return self
     */
    public function setUrl($url)
    {
    	$this->url = $url;

    	return $this;
    }

    /**
     * @return mixed
     */
    public function getResponse()
    {
    	return $this->response;
    }


    /**
     * @return string
     */
    public function getHttpCode()
    {
    	return $this->http_code;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
    	return $this->method;
    }

    /**
     * @param mixed $method
     *
     * @return self
     */
    public function setMethod($method)
    {
    	$this->method = $method;

    	return $this;
    }
}