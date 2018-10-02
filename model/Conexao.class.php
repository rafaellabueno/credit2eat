<?php

/**
 * Description of Conexao
 *
 * @author Guilherme
 */
class Conexao extends Config {

    private $port, $host, $user, $senha, $banco;
    protected $obj, $itens = array(), $prefix, $conn;

    function __construct() {
        $this->port = self::BD_PORT;
        $this->host = self::BD_HOST;
        $this->user = self::BD_USER;
        $this->banco = self::BD_BANCO;
        $this->senha = self::BD_SENHA;
        $this->prefix = self::BD_PREFIX;

        try {
            $this->conn = $this->Conectar();
        } catch (Exception $ex) {
            exit($ex->getMessage() . '<h2> Erro na conexão! </h2>');
        }
    }

    private function Conectar() {
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        );
        $link = new PDO("mysql:host={$this->host};port={$this->port};dbname={$this->banco}", $this->user, $this->senha, $options);
        return $link;
    }

    function ExecuteSQL($query, array $params = NULL) {
        $this->obj = $this->conn->prepare($query);
        return $this->obj->execute();
    }

    public function LastInsertID() {
        return $this->conn->lastInsertId();
    }

    function ListarDados() {
        return $this->obj->fetch(PDO::FETCH_ASSOC);
    }

    function TotalDados() {
        return $this->obj->rowCount();
    }

    function GetItens() {
        return $this->itens;
    }

}

?>