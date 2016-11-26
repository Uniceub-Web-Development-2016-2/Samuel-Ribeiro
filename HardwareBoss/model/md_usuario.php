<?php

	class Usuario {
	
		private $usuario;
		private $nome;
		private $senha;
		private $email;
		private $genero;
		private $datanasc;
		private $permissao;
		
		public function __construct($usuario, $nome, $senha, $email, $genero, $datanasc, $permissao) {
			$this->usuario = $usuario;
			$this->nome = $nome;
			$this->senha = $senha;
			$this->email = $email;
			$this->genero = $genero;
			$this->datanasc = $datanasc;
			$this->permissao = $permissao;
		}
		
		public function getUsuario(){
			return $this->usuario;
		}
		
		public function setUsuario($usuario) {
			$this->$usuario = $usuario;
		}
		
		public function getNome(){
			return $this->nome;
		}
		
		public function setNome($nome) {
			$this->$nome = $nome;
		}
		
		public function getSenha(){
			return $this->senha;
		}
		
		public function setSenha($senha) {
			$this->$senha = $senha;
		}
		
		public function getEmail(){
			return $this->email;
		}
		
		public function setEmail($email) {
			$this->email = $email;
		}
		
		public function getGenero(){
			return $this->genero;
		}
		
		public function setGenero($genero) {
			$this->genero = $genero;
		}
		
		public function getDataNasc(){
			return $this->datanasc;
		}
		
		public function setDataNasc($data) {
			$this->$datanasc = $datanasc;
		}
		
		public function getPermissao(){
			return $this->permissao;
		}
		
		public function setPermissao($permissao) {
			$this->$permissao = $permissao > 0 && $permissao <= 2 ? $permissao : 2;
		}
	
	}

?>