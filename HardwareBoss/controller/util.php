<?php

	function restringeStr($texto, $qtd){

		if(strlen($texto) > $qtd){
			return substr($texto, 0 ,$qtd)."...";
		} else {
			return $texto;
		}

	}

	function getDay($data){
		$day = explode('/', $data);
		return $day[0];
	}

	function getReducedMonth($data){
		$month = explode('/', $data);

		$meses = ['jan','fev','mar','abr','mai','jun','jul','ago','set','out','nov','dez'];
		
		return $meses[$month[1]-1];

	}


?>