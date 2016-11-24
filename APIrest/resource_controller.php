<?php
include_once ('request.php');
include_once ('db_manager.php');
class ResourceController
{
	//private $connection;
	//public function __construct() 
	//{
	//	$this->connection = new DBConnector();	
	//}
		
 	private $METHODMAP = ['GET' => 'search' , 'POST' => 'create' , 'PUT' => 'update', 'DELETE' => 'remove' ];
	
	public function treat_request($request) {

		return $this->{$this->METHODMAP[$request->getMethod()]}($request);
	
	}	
	
	private function search($request) {

		$params = self::queryParams($request->getParameters());

		if($params == "")
			$query = 'SELECT * FROM '.$request->getResource();
		else
			$query = 'SELECT * FROM '.$request->getResource().' WHERE '.$params;

		$result = (new DBConnector())->query($query); 
		
		return $result->fetchAll(PDO::FETCH_ASSOC);

	}
	
	private function create($request) {
		$body = $request->getBody();
		$resource = $request->getResource();
		$query = 'INSERT INTO '.$resource.' ('.$this->getColumns($body).') VALUES ('.$this->getValues($body).')';
		return (new DBConnector())->query($query);
		 
	}
	
	private function update($request) {
        $body = $request->getBody();
        $resource = $request->getResource();
        $query = 'UPDATE '.$resource.' SET '. $this->getUpdateCriteria($body);
        $result = (new DBConnector())->query($query); 
		return $result;
    }

    private function remove($request) {
    	$body = $request->getBody();
        $resource = $request->getResource();
    	$query = 'DELETE FROM '.$resource.' WHERE '.self::bodyParams($body);
    	$result = (new DBConnector())->query($query);
    	return $result;
    }
	
	private function bodyParams($json) {
		$criteria = "";
                $array = json_decode($json, true);
                foreach($array as $key => $value) {
                                $criteria .= $key." = '".$value."' AND ";
                 
                }
                return substr($criteria, 0, -5);
	
		
	}
	
	private function getUpdateCriteria($json)
	{
		$criteria = "";
		$where = " WHERE ";
		$array = json_decode($json, true);
		foreach($array as $key => $value) {
			if($key != 'id')
				$criteria .= $key." = '".$value."',";
			
		}
		return substr($criteria, 0, -1).$where." id = ".$array['id'];
	}	
	private function getColumns($json)
	{
		$array = json_decode($json, true);
		$keys = array_keys($array);
		return implode(",", $keys);
	
	}
	private function getValues($json) 
        {
                $array = json_decode($json, true);
                $keys = array_values($array);
                $string =  implode("','", $keys);
		return "'".$string."'";
        
        }
		
	private function queryParams($params) {
		$query = "";		
		foreach($params as $key => $value) {
			$query .= $key.' = '.$value.' AND ';	
		}
		$query = substr($query,0,-5);
		return $query;
	}
	
		
}
