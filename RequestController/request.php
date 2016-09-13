<?php


class Request
{
	$method;
	$protocol;
	$server_address; //ip address
	$client_address; //client ip
	$path;
	$query_string;
	$body;
	
	
	public function getMethod(){
		return $this->method;
	}

	public function setMethod($method){
		$this->method = $method;
	}

	public function getProtocol(){
		return $this->protocol;
	}

	public function setProtocol($protocol){
		$this->protocol = $protocol;
	}

	public function getServerAddress(){
		return $this->server_address;
	}

	public function setServerAddress($server_address){
		$this->server_address = $server_address;
	}

	public function getClientAddress(){
		return $this->client_address;
	}

	public function setClientAddress($client_address){
		$this->client_address = $client_address;
	}

	public function getPath(){
		return $this->path;
	}

	public function setPath($path){
		$this->path = $path;
	}

	public function getQueryString(){
		return $this-> $query_string;
	}

	public function setQueryString(){
		$this->query_string = $query_string;
	}

	public function getBody(){
		return $this-> $body;
	}

	public function setBody(){
		$this->body = $body;
	}

	public function __construct($method, $protocol, $server_address, $client_address, $path, $query_string, $body)
	
	{
		$this->method = $method;
		$this->protocol = $protocol;
		$this->server_address = $server_addr;
		$this->client_address = $client_addr;
		$this->path = $path;
		$this->query_string = $query;
		$this->body = $body; 
	}	

}
