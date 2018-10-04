<?php

class Configuracoes extends Conexao {

    function __construct() {
        parent::__construct();
    }

    function setCursos($nome) {
        $query = "INSERT INTO cursos (nome_curso, user_id) VALUES ('$nome', '$_SESSION[id]');";
        $var = $this->ExecuteSQL($query);
    }

    function getCursos() {
        $query = "SELECT * FROM cursos WHERE user_id = $_SESSION[id]";

        //$query .= "ORDER BY nome_curso";

        $this->ExecuteSQL($query);

        $this->GetLista();
    }

    private function GetLista() {
        $i = 1;
        while ($lista = $this->ListarDados()) {
            $this->itens[$i] = array(
                'id_curso' => $lista['id_curso'],
                'nome_curso' => $lista['nome_curso'],
                    //'id_usuario' => $lista['id_usuario']
            );
            $i++;
        }
    }

    function setValorPrazo($valor_prazo) {
        $query = "UPDATE valor_prazo SET valor_prazo='$valor' WHERE id=1";
        $this->ExecuteSQL($query);
    }

    function getValorPrazo() {
        $query = "SELECT valor_prazo FROM valor_prazo WHERE id=1";
        $this->ExecuteSQL($query);
    }

}

?>