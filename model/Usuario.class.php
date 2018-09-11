<?php

class Usuario extends Conexao {

    function __construct() {
        parent::__construct();
    }

    public $nome = '';
    public $email = '';
    public $senha = '';

    function logar($id, $passwd) {


        $query = "SELECT * FROM usuario where email='$id'";


        $var = $this->ExecuteSQL($query);


        $user = $this->ListarDados();

        if (!session_id()) {
            session_start();
        }

        if ($user && password_verify($passwd, $user['senha'])) {
            $_SESSION['nome'] = $this->nome = $user['nome'];
            $_SESSION['id'] = $this->id = $user['id'];
            header("location:./menu");
        } else {
            $_SESSION['erro'] = 'Nome ou Senha incorretos';
            header("location:./");
        }
    }

    function cadastrar($name, $mail, $password) {

        $query = "SELECT * FROM usuario where nome='$name'";
        $var = $this->ExecuteSQL($query);
        $user = $this->ListarDados();
        $_SESSION['erro'] = 'Nome já existe';
        if (!$user) {
            $query = "SELECT * FROM usuario where email='$mail'";
            $var = $this->ExecuteSQL($query);
            $_SESSION['erro'] = 'Email já existe';

            $user2 = $this->ListarDados();
            if (!$user2) {
                unset($_SESSION['erro']);
                $passwordhash = password_hash($password, PASSWORD_DEFAULT);
                $query = "INSERT INTO usuario (nome, email, senha) VALUES ('$name', '$mail', '$passwordhash');";
                $var = $this->ExecuteSQL($query);
                $this->logar($mail, $password);
                header("location:./menu");
            }
        }
        if (isset($_SESSION['erro'])) {
            header("location:./cadastro");
        }
    }

}

?>
