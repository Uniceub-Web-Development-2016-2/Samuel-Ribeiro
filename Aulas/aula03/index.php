<?php

include ('request.php');

$method=$_SERVER['REQUEST_METHOD'];
$protocol=substr($_SERVER["SERVER_PROTOCOL"], 0, -4);
$server_ip=$_SERVER["SERVER_ADDR"];
$remote_ip=$_SERVER["REMOTE_ADDR"];
$resourcee=substr($_SERVER["SCRIPT_NAME"], 1, 5);
$params=$_SERVER['QUERY_STRING'];

$request = new request($method, $protocol, $server_ip, $remote_ip, $resourcee, $params);
var_dump($request);
