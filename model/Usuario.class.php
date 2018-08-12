<?php

class Usuario extends Conexao  {
		
	function __construct(){
		parent::__construct();
	}

	public $nome = '';
	public $email = '';
	public $senha = '';
	




	function logar($id, $passwd){


		$query = "SELECT * FROM usuario where nome='$id' and senha = '$passwd'";
 
	
		$var = $this->ExecuteSQL($query);


		$user = $this->ListarDados();

		if(!session_id()){
			session_start();
		}
		if(isset($user['nome']) && isset($user['id'])){
			$_SESSION['nome'] = $this->nome = $user['nome'];
			$_SESSION['id'] = $this->id = $user['id'];
			header("location:./menu");
		}else{
			$_SESSION['erro'] = 'Nome ou Senha incorretos';
			header("location:./");
		}


	}

	function cadastrar($name, $mail, $password){
		
		$query = "SELECT * FROM usuario where nome='$name'";	
		$var = $this->ExecuteSQL($query);
		$user = $this->ListarDados();	
		$_SESSION['erro'] = 'Nome já existe';
		if(!$user){
			$query = "SELECT * FROM usuario where email='$mail'";	
			$var = $this->ExecuteSQL($query);
			$_SESSION['erro'] = 'Email já existe';

			$user2 = $this->ListarDados();	
			if(!$user2){
				unset($_SESSION['erro']);
				$query = "INSERT INTO usuario (nome, email, senha) VALUES ('$name', '$mail', '$password');";	
				$var = $this->ExecuteSQL($query);
				$this->logar($name, $password);
				header("location:./menu");
			}

		}
		if(isset($_SESSION['erro'])){
			header("location:./cadastro");	
		}


	}


}

?>