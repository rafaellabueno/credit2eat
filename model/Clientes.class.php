<?php

class Clientes extends Conexao {

    function __construct() {
        parent::__construct();
    }

    function GetClientes() {
        //busca os produtos
        $query = "SELECT * FROM cliente WHERE id_usuario = $_SESSION[id] and valido = 1";

        $query .= " ORDER BY cli_nome ";

        $this->ExecuteSQL($query);

        $this->GetLista();
    }

    public function setCliente($nome, $matricula, $telefone, $email, $senha, $curso) {
        #$ncurso = "SELECT nome_curso FROM cursos WHERE id_curso = $curso";
        $query = "INSERT INTO cliente (cli_nome, cli_matricula, cli_telefone, cli_email, cli_senha, id_usuario, valido, cli_curso) VALUES ('$nome', '$matricula', '$telefone','$email', MD5('$senha'), '$_SESSION[id]', 1, '$ncurso');";
        $var = $this->ExecuteSQL($query);
    }

    function GetClienteID($id) {

        $query = "SELECT * FROM cliente WHERE cli_id = {$id}";

        $this->ExecuteSQL($query);

        return $this->ListarDados();
    }


    private function GetLista() {
        $i = 1;
        while ($lista = $this->ListarDados()) {
            $this->itens[$i] = array(
                'cli_id' => $lista['cli_id'],
                'cli_nome' => $lista['cli_nome'],
                'cli_matricula' => $lista['cli_matricula'],
                'cli_telefone' => $lista['cli_telefone'],
                'cli_email' => $lista['cli_email'],
                'cli_senha' => $lista['cli_senha'],
                'cli_divida' => $lista['cli_divida'],
                'cli_curso' => $lista['cli_curso']
                //'id_usuario' => $lista['id_usuario']
            );
            $i++;
        }
    }

    public function atualizarCliente($nome, $email) {
        $query = "UPDATE cliente SET nome='$nome', email='$email' WHERE id = #id_usuario";
        $var = $this->ExecuteSQL($query);
    }

    public function remove($id) {

        $query = "UPDATE cliente SET valido = 0 where cli_id = $id";
        $var = $this->ExecuteSQL($query);
        return $var;
    }

}

?>