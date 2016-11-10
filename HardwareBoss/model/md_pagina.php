<?php
	class Pagina{

		private $nome;
		private $titulo;

    	public function __contruct($nome, $titulo){
    		$this->nome = $nome;
    		$this->titulo = $titulo;
    	}

    	public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
        	$this->$nome = $nome;
        }

        public function getTitulo{
        	return $this->$titulo;
        }

        public function setTitulo($titulo){
        	$this->$titulo = $titulo;
        }

    }

?>