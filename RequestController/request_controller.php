<?php

class RequestController
{
	public static $VALID_METHODS = ['GET', 'PUT', 'POST', 'DELETE'];
	public static $VALID_PROTOCOL = ['HTTP/1.1', 'HTTPS/1.1', 'HTTPS/1.0', 'HTTP/1.0'];
	
	public function create_request($request_info){
		
		if(!self::is_valid_method($request_info['REQUEST_METHOD'])){
			return array("code" => "405", "message" => "method is not allowed");
		}

		if(!self::is_valid_protocol(substr($request_info['SERVER_PROTOCOL'],0,-4))){
			return array("code" => "405", "message" => "protocol is not accept");
		}	
	
	//$request_info['REMOTE_ADDR'];
	//$request_info['SERVER_ADDR'];
	//$request_info['SERVER_PROTOCOL'];
	//$request_info['REQUEST_URI'];
	//$request_info['QUERY_STRING'];
	//file_get_contents('php://input');
	//return new Request();
		 
	}
	
	public function is_valid_method($method){
		if(is_null($method) || !in_array($method, self::$VALID_METHODS))
			return false;
		return true;
	}
	
	public function is_valid_protocol($protocol){
		if(is_null($protocol) || !in_array($protocol, self::$VALID_PROTOCOL))
			return false;
		return true;
	}

	public function is_valid_server_address($server_address){
		if(is_null($server_adress))
			return false;
		return true;
	}


}