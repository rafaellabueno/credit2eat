<?php

class Clientes extends Conexao {

    function __construct() {
        parent::__construct();
    }

    function GetClientes() {
        //busca os produtos
        $query = "SELECT * FROM cliente WHERE id_usuario = $_SESSION[id]";

        $query .= " ORDER BY cli_nome "; 

        $this->ExecuteSQL($query);

        $this->GetLista();
    }

    public function setCliente($nome, $matricula, $telefone, $email, $senha) {

        $query = "INSERT INTO cliente (cli_nome, cli_matricula, cli_telefone, cli_email, cli_senha, id_usuario) VALUES ('$nome', '$matricula', '$telefone','$email', MD5('$senha'), '$_SESSION[id]');";
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
                'cli_divida' => $lista['cli_divida']
                    //'id_usuario' => $lista['id_usuario']
            );
            $i++;
        }
    }

    public function atualizarCliente($nome, $email) {
        $query = "UPDATE cliente SET nome='$nome', email='$email' WHERE id = #id_usuario"; #PEGAR ID DO CLIENTE
        $var = $this->ExecuteSQL($query);
    }

    public function remove() {
        
    }

}
?>

<!--$query = "SELECT * FROM {this->prefix} produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id" 
query para buscar os produtos de uma categoria específica-->