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

	function validaEmail($email){
	    $er = "/^(([0-9a-zA-Z]+[-._+&])*[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}){0,1}$/";
	    
	    if (preg_match($er, $email)){
		return true;
	    } else {
		return false;
    }
}
