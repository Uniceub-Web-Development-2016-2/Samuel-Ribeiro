<?php

include ('resource_controller.php');
include_once('request.php');

class RequestController
{
	private static $VALID_METHODS = array('GET', 'POST', 'PUT', 'DELETE');
	private static $VALID_PROTOCOL = array('HTTPS/1.0', 'HTTP/1.1', 'HTTP/1.1');


	private function create_request($request_info)
	{
		if(!self::is_valid_method($request_info['REQUEST_METHOD']))
		{
			return array("code" => "405", "message" => "method not allowed");
		}	

		if(!self::is_valid_protocol($request_info['SERVER_PROTOCOL']))
		
		{
			return array("code" => "404", "message" => "protocol does not support");
		}

		

		return new Request($request_info['REQUEST_METHOD'],$request_info['SERVER_PROTOCOL'],$request_info['SERVER_ADDR'],$request_info['REMOTE_ADDR'],$request_info['REQUEST_URI'],$request_info['QUERY_STRING'],file_get_contents('php://input'));
		
	}
	
	public function is_valid_method($method)
	{
		if( is_null($method) || !in_array($method, self::$VALID_METHODS))
			return false;
		
		return true;
	}

	public function is_valid_protocol($protocol)
	{
		if( is_null($protocol) || !in_array($protocol, self::$VALID_PROTOCOL))
			return false;
		
		return true;
	}

	public function isValidServerAddress($serverAddress)
	{
		return (filter_var($serverAddress, FILTER_VALIDATE_IP) === true || $serverAddress = 'localhost') ? true : false;
	}

	public function isValidClientAddress($clientAddress)
	{
		return (filter_var($clientAddress, FILTER_VALIDATE_IP) === true) ? true : false;
	}


	public function isValidPath($path)
	{
		return (filter_var($path, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED) === true) ? true : false;
	}

	public function execute() {
		$request = self::create_request($_SERVER);
		$resource_controller = new ResourceController();
	    return $resource_controller->treat_request($request);
	}

	public function isValidQueryString($queryString)
	{
		return (filter_var($queryString, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === true) ? true : false;
	}
}
