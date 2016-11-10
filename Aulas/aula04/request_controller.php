<?php

class RequestController

{
	const VALID_PROTOCOL = array('HTTP/1.1', 'HTTPS/1.1');
	
	public function create_request($request_info)
	{
		if(!self::is_valid_protocol($request_info['SERVER_PROTOCOL']))
		{
			return array("code" => "405", "message" => "protocol is not accept");
			
		}	
		
	//	$request_info['REMOTE_ADDR'];
	//	$request_info['SERVER_ADDR'];
	//	$request_info['SERVER_PROTOCOL'];
	//	$request_info['REQUEST_URI'];
	//	$request_info['QUERY_STRING'];
	//	file_get_contents('php://input');
	//	return new Request();
		
	}
	

	public function is_valid_protocol($protocol)
	{
		if(is_null($protocol) || !in_array($protocol, self::VALID_PROTOCOL))
			return false;

		return true;
	}
}
