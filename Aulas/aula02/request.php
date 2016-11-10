<?php
	class Request{
		
		private $method;
		private $protocol;
		private $ip;
		private $resourcee;
		private $parameters = array;

		public function __construct($method, $protocol, $ip, $resourcee, $parameters){
			$this->method = $method;
			$this->protocol = $protocol;
			$this->ip = $ip;
			$this->resourcee = $resourcee;
			$this->parameters = $parameters;
		}
		
		
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
			$this-> = $protocol;
		}
		public function getIp(){
			return $this->ip;
		}
		public function setIp($ip){
			$this->$ip = $ip;
		}
		public function getParameter(){
			return $this->parameter;
		}
		public function setParameter($parameters){
			$this->parameter = $parameters;
		}
		public function getResourcee(){
			return $this->resourcee;
		}
		public function setResourcee($resourcee){
			$this->resourcee = $resourcee;
		}

		public function toString(){
			$url = $this->protocol."://".$this->ip."/".$this->resourcee"?".$this->parameters;
			return $url;
		}
		
}

