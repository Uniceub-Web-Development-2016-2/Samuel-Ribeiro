<?php
	class request{
		
		private $method;
		private $protocol;
		private $server_ip;
		private $remote_ip;
		private $resourcee;
		private $params;
		
		
		public function getProtocol(){
			return $this->protocol;
		}
		public function setProtocol($protocol){
			$this->protocol = $protocol;
		}
		public function getServerIP(){
			return $this->server_ip;
		}
		public function setServerIP($server_ip){
			$this->server_ip = $server_ip;
		}
		public function setRemoteIP($remote_ip){
			$this->remote_ip = $remote_ip;
		}
		public function getRemoteIP(){
			return $this->remote_ip;
		}
		public function getResourcee(){
			return $this->resourcee;
		}
		public function setResourcee($resourcee){
			$this->resourcee = $resourcee;
		}
		public function getParams(){
			return $this->params;
		}
		public function setParams($params){
			$this->params = $params;
		}
		public function getMethod(){
			return $this->method;
		}
		public function setMethod($method){
			$this->method = $method;
		}
		
		public function __construct($method, $protocol, $server_ip, $remote_ip, $resourcee, $params){
			
			$this->method = $method;
			$this->protocol = $protocol;
			$this->server_ip = $server_ip;
			$this->remote_ip = $remote_ip;
			$this->resourcee = $resourcee;
			$this->params = $params;
		}
		

}

