<?php

class Usuario extends Conexao {

    function __construct() {
        parent::__construct();
    }

    public $nome = '';
    public $email = '';
    public $senha = '';

    function GetUsuario() {
        //busca os produtos
        $query = "SELECT * FROM usuario WHERE id = $_SESSION[id]";

        $this->ExecuteSQL($query);

        $this->GetLista();
    }

    private function GetLista() {
        $i = 1;
        while ($lista = $this->ListarDados()) {
            $this->itens[$i] = array(
                'id' => $lista['id'],
                'nome' => $lista['nome'],
                'email' => $lista['email'],
                'senha' => $lista['senha'],
            );
            $i++;
        }
    }

    public function alterarUsuario($nome, $email) {
        $query = "UPDATE usuario SET nome='$nome', email='$email' WHERE id = $_SESSION[id]";
        $var = $this->ExecuteSQL($query);
    }

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
        $nome = filter_var($name, FILTER_SANITIZE_STRING);
        $email = filter_var($mail, FILTER_VALIDATE_EMAIL);
        $query = "SELECT * FROM usuario where nome='$nome'";
        $var = $this->ExecuteSQL($query);
        $user = $this->ListarDados();
        $_SESSION['erro'] = 'Nome já existe';
        if (!$user) {
            $query = "SELECT * FROM usuario where email='$email'";
            $var = $this->ExecuteSQL($query);
            $_SESSION['erro'] = 'Email já existe';

            $user2 = $this->ListarDados();
            if (!$user2) {
                unset($_SESSION['erro']);
                $passwordhash = password_hash($password, PASSWORD_DEFAULT);
                $query = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$passwordhash');";
                $var = $this->ExecuteSQL($query);
                $this->logar($email, $password);
                header("location:./menu");
            }
        }
        if (isset($_SESSION['erro'])) {
            header("location:./cadastro");
        }
    }

}
?>  