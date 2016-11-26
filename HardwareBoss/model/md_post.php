<?php
	class Post{

		private $autor;
		private $conteudo;
        private $data;
        private $titulo;

    	public function __contruct($autor, $conteudo, $data, $titulo){
    		$this->autor = $autor;
    		$this->conteudo = $conteudo;
            $this->data = $data;
            $this->titulo = $titulo;
    	}

    	public function getAutor(){
            return $this->autor;
        }

        public function setAutor($autor){
        	$this->$autor = $autor;
        }

        public function getConteudo{
            return $this->$conteudo;
        }

        public function setConteudo($conteudo){
            $this->$conteudo = $conteudo;
        }
        
        public function getData{
            return $this->$data;
        }

        public function setData($data){
            $this->$data = $data;
        }
        public function getTitulo{
        	return $this->$titulo;
        }

        public function setTitulo($titulo){
        	$this->$titulo = $titulo;
        }

    }

?>